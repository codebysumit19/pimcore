<?php

namespace App\Command;

use Carbon\Carbon;
use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Service as ObjectService;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:import-customers',
    description: 'Import customers from CSV into /Customers data object folder with identity resolution'
)]
class ImportCustomersFromCsvCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $csvPath = PIMCORE_PROJECT_ROOT . '/var/import/customers.csv';

        if (!is_readable($csvPath)) {
            $this->writeError('CSV not readable: ' . $csvPath);
            return 1;
        }

        /** @var DataObject\Folder $customersFolder */
        $customersFolder = ObjectService::createFolderByPath('/Customers');

        if (($handle = fopen($csvPath, 'r')) === false) {
            $this->writeError('Cannot open CSV file');
            return 1;
        }

        // --- Detect delimiter from header line (comma or semicolon) ---
        $firstLine = fgets($handle);
        if ($firstLine === false) {
            $this->writeError('Empty CSV (no header row).');
            return 1;
        }

        rewind($handle);

        $delimiter = ',';
        if (substr_count($firstLine, ';') > substr_count($firstLine, ',')) {
            $delimiter = ';';
        }

        $this->writeInfo("Detected CSV delimiter: '{$delimiter}'");

        // Read header with chosen delimiter
        $header = fgetcsv($handle, 0, $delimiter);
        if ($header === false) {
            $this->writeError('Could not read header row.');
            return 1;
        }

        $this->writeInfo('Header columns: ' . implode(' | ', $header) . ' (count: ' . count($header) . ')');

        $rowNumber = 0;
        $created   = 0;
        $updated   = 0;

        while (($row = fgetcsv($handle, 0, $delimiter)) !== false) {
            $rowNumber++;
            $colCount = count($row);
            $this->writeInfo("Row $rowNumber has $colCount columns");

            // your cleaned CSV: name,email,phone,dealer_id,region,territory,engagementsource,segment,last event date
            if ($colCount < 9) {
                $this->writeError("Row $rowNumber has fewer than 9 columns, skipping.");
                continue;
            }

            [
                $name,
                $email,
                $phone,
                $dealerId,
                $region,
                $territory,
                $engagementSource,
                $segment,
                $lastEventDate,
            ] = array_slice($row, 0, 9);

            // Normalize
            $name             = trim((string)$name);
            // remove trailing space + number from name, e.g. "Priya Kumar 1" -> "Priya Kumar"
            $name             = preg_replace('/\s+\d+$/', '', $name);
            $email            = trim((string)$email);
            $phone            = trim((string)$phone);
            $dealerId         = trim((string)$dealerId);
            $region           = trim((string)$region);
            $territory        = trim((string)$territory);
            $engagementSource = trim((string)$engagementSource);
            $segment          = trim((string)$segment);
            $lastEventDate    = trim((string)$lastEventDate);

            // --------- FIND / MERGE LOGIC ---------
            /** @var DataObject\Customer[] $candidateProfiles */
            $candidateProfiles = [];

            if ($email !== '') {
                $list = DataObject\Customer::getByEmail($email, [
                    'limit' => 50,
                    'offset' => 0,
                ]);
                foreach ($list as $item) {
                    $candidateProfiles[$item->getId()] = $item;
                }
            }

            if ($phone !== '') {
                $list = DataObject\Customer::getByPhone($phone, [
                    'limit' => 50,
                    'offset' => 0,
                ]);
                foreach ($list as $item) {
                    $candidateProfiles[$item->getId()] = $item;
                }
            }

            if ($dealerId !== '') {
                $list = DataObject\Customer::getByDealer_id($dealerId, [
                    'limit' => 50,
                    'offset' => 0,
                ]);
                foreach ($list as $item) {
                    $candidateProfiles[$item->getId()] = $item;
                }
            }

            $candidateProfiles = array_values($candidateProfiles);

            /** @var DataObject\Customer|null $customer */
            $customer = null;

            if (count($candidateProfiles) === 0) {
                // no match → new profile
                $customer = new DataObject\Customer();
                $customer->setParent($customersFolder);
                $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
                $customer->setKey($key);
                $customer->setPublished(true);
                $created++;
            } else {
                // at least one existing profile
                if (count($candidateProfiles) === 1) {
                    $customer = $candidateProfiles[0];
                } else {
                    // MULTIPLE matches → choose master & merge
                    $customer = $this->pickMasterProfile($candidateProfiles);

                    foreach ($candidateProfiles as $other) {
                        if ($other->getId() === $customer->getId()) {
                            continue;
                        }

                        // keep earliest creationDate
                        if ($other->getCreationDate() < $customer->getCreationDate()) {
                            $customer->setCreationDate($other->getCreationDate());
                        }

                        // additional merge rules can go here

                        $other->delete();
                    }
                }
                $updated++;
            }

            // --------- ENRICH MASTER PROFILE ---------

            if ($name !== '') {
                $customer->setName($name);
            }

            if ($email !== '') {
                $customer->setEmail($email);
            }
            if ($phone !== '') {
                $customer->setPhone($phone);
            }
            if ($dealerId !== '') {
                $customer->setDealer_id($dealerId);
            }

            if ($region !== '') {
                $customer->setRegion($region);
            }
            if ($territory !== '') {
                $customer->setTerritory($territory);
            }
            if ($engagementSource !== '') {
                $customer->setEngagementsource($engagementSource);
            }

            if ($segment !== '') {
                $customer->setSegments([$segment]);
            }

            if ($lastEventDate !== '') {
                try {
                    $newDate = Carbon::parse($lastEventDate);
                    $current = $customer->getLastEventDate();
                    if (!$current || $newDate->gt(Carbon::instance($current))) {
                        $customer->setLastEventDate($newDate);
                    }
                } catch (\Exception $e) {
                    $this->writeError("Row $rowNumber: invalid date '$lastEventDate', skipping date.");
                }
            }

            $customer->save();
        }

        fclose($handle);

        $this->writeInfo("Customer import finished. Created $created objects, updated $updated objects.");
        return 0;
    }

    /**
     * Pick the master profile among duplicates.
     *
     * @param DataObject\Customer[] $profiles
     */
    private function pickMasterProfile(array $profiles): DataObject\Customer
    {
        // 1) prefer profile that has DealerID
        $withDealer = array_filter($profiles, function (DataObject\Customer $c) {
            return (string)$c->getDealer_id() !== '';
        });

        $candidates = $withDealer ?: $profiles;

        // 2) among candidates, keep oldest record as master
        usort($candidates, function (DataObject\Customer $a, DataObject\Customer $b) {
            return $a->getCreationDate() <=> $b->getCreationDate();
        });

        return $candidates[0];
    }
}

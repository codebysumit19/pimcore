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

        // header row
        $header = fgetcsv($handle);
        if ($header === false) {
            $this->writeError('Empty CSV (no header row).');
            return 1;
        }

        $rowNumber = 0;
        $created   = 0;
        $updated   = 0;

        while (($row = fgetcsv($handle)) !== false) {
            $rowNumber++;

            if (count($row) < 9) {
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
            ] = $row;

            // normalize
            $name      = trim((string)$name);
            $email     = trim((string)$email);
            $phone     = trim((string)$phone);
            $dealerId  = trim((string)$dealerId);
            $region    = trim((string)$region);
            $territory = trim((string)$territory);
            $engagementSource = trim((string)$engagementSource);
            $segment   = trim((string)$segment);
            $lastEventDate = trim((string)$lastEventDate);

            // ---------- Identity resolution: collect all candidates ----------
            /** @var DataObject\Customer[] $candidates */
            $candidates = [];

            // 1) Email = primary identifier
            if ($email !== '') {
                $list = DataObject\Customer::getByEmail($email, ['limit' => 50]);
                if ($list instanceof \Pimcore\Model\DataObject\Listing) {
                    foreach ($list as $item) {
                        $candidates[$item->getId()] = $item;
                    }
                } elseif ($list instanceof DataObject\Customer) {
                    $candidates[$list->getId()] = $list;
                }
            }

            // 2) Phone = secondary
            if ($phone !== '') {
                $list = DataObject\Customer::getByPhone($phone, ['limit' => 50]);
                if ($list instanceof \Pimcore\Model\DataObject\Listing) {
                    foreach ($list as $item) {
                        $candidates[$item->getId()] = $item;
                    }
                } elseif ($list instanceof DataObject\Customer) {
                    $candidates[$list->getId()] = $list;
                }
            }

            // 3) DealerID = B2B match rule
            if ($dealerId !== '') {
                $list = DataObject\Customer::getByDealer_id($dealerId, ['limit' => 50]);
                if ($list instanceof \Pimcore\Model\DataObject\Listing) {
                    foreach ($list as $item) {
                        $candidates[$item->getId()] = $item;
                    }
                } elseif ($list instanceof DataObject\Customer) {
                    $candidates[$list->getId()] = $list;
                }
            }

            $candidates = array_values($candidates);

            /** @var DataObject\Customer $customer */
            if (count($candidates) === 0) {
                // no existing → create new
                $customer = new DataObject\Customer();
                $customer->setParent($customersFolder);
                $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
                $customer->setKey($key);
                $customer->setPublished(true);
                $created++;
            } elseif (count($candidates) === 1) {
                // single match → update
                $customer = $candidates[0];
                $updated++;
            } else {
                // multiple matches → pick master = latest lastEventDate
                $customer = $this->pickMasterByLatestLastEventDate($candidates);

                // merge & delete the other duplicates
                foreach ($candidates as $other) {
                    if ($other->getId() === $customer->getId()) {
                        continue;
                    }

                    // keep earliest creation date for the master
                    if ($other->getCreationDate() < $customer->getCreationDate()) {
                        $customer->setCreationDate($other->getCreationDate());
                    }

                    // OPTIONAL: merge segments, etc., here if needed
                    // $mergedSegments = array_unique(array_merge(
                    //     (array)$customer->getSegments(),
                    //     (array)$other->getSegments()
                    // ));
                    // $customer->setSegments($mergedSegments);

                    $other->delete();
                }

                $updated++;
            }

            // ---------- Enrich / overwrite master profile ----------

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

            // overwrite segments from CSV
            if ($segment !== '') {
                $customer->setSegments([$segment]);
            }

            // last event date: keep the latest
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
     * Choose master profile among duplicates: the one with the latest lastEventDate.
     * If no lastEventDate set, fall back to most recently modified, then earliest created.
     *
     * @param DataObject\Customer[] $profiles
     */
    private function pickMasterByLatestLastEventDate(array $profiles): DataObject\Customer
    {
        usort($profiles, function (DataObject\Customer $a, DataObject\Customer $b) {
            $aDate = $a->getLastEventDate();
            $bDate = $b->getLastEventDate();

            // 1) latest lastEventDate DESC
            if ($aDate instanceof \DateTimeInterface || $bDate instanceof \DateTimeInterface) {
                if ($aDate && $bDate) {
                    return $bDate <=> $aDate; // newer first
                }
                // one has date, the other not → with date wins
                if ($aDate && !$bDate) {
                    return -1;
                }
                if (!$aDate && $bDate) {
                    return 1;
                }
            }

            // 2) if no lastEventDate on both or equal → latest modificationDate
            $aMod = $a->getModificationDate();
            $bMod = $b->getModificationDate();
            if ($aMod !== $bMod) {
                return $bMod <=> $aMod; // newer first
            }

            // 3) final tie‑breaker → oldest creationDate
            return $a->getCreationDate() <=> $b->getCreationDate();
        });

        // after sort, first element is master
        return $profiles[0];
    }
}



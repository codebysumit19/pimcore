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
            $name              = trim((string)$name);
            // remove trailing space + number from name, e.g. "Priya Kumar 1" -> "Priya Kumar"
            $name              = preg_replace('/\s+\d+$/', '', $name);
            $email             = trim((string)$email);
            $phone             = trim((string)$phone);
            $dealerId          = trim((string)$dealerId);
            $region            = trim((string)$region);
            $territory         = trim((string)$territory);
            $engagementSource  = trim((string)$engagementSource);
            $segment           = trim((string)$segment);
            $lastEventDate     = trim((string)$lastEventDate);

            // --------- FIND / MERGE LOGIC ---------
            /** @var DataObject\Customer[] $candidateProfiles */
            $candidateProfiles = [];

            // Email = primary identifier
            if ($email !== '') {
                $list = DataObject\Customer::getByEmail($email, [
                    'limit'  => 500,
                    'offset' => 0,
                ]);
                foreach ($list as $item) {
                    $candidateProfiles[$item->getId()] = $item;
                }
            }

            // Phone = secondary identifier
            if ($phone !== '') {
                $list = DataObject\Customer::getByPhone($phone, [
                    'limit'  => 500,
                    'offset' => 0,
                ]);
                foreach ($list as $item) {
                    $candidateProfiles[$item->getId()] = $item;
                }
            }

            // DealerID = B2B match rule
            if ($dealerId !== '') {
                $list = DataObject\Customer::getByDealer_id($dealerId, [
                    'limit'  => 500,
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

                        // TODO: if you want to merge arrays like segments from old records, do it here
                        // Example:
                        // $mergedSegments = array_unique(array_merge(
                        //     (array)$customer->getSegments(),
                        //     (array)$other->getSegments()
                        // ));
                        // $customer->setSegments($mergedSegments);

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

            // segments – example: keep only latest segment from CSV
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
     * Pick the master profile among duplicates (golden record).
     *
     * Strategy:
     *  - Prefer records with DealerID (B2B anchor).
     *  - Prefer records from trusted source (CMS/CRM/etc.) if you store that.
     *  - Prefer records with more filled fields (completeness).
     *  - Prefer the most recently modified/updated profile if tie.
     *
     * @param DataObject\Customer[] $profiles
     */
    private function pickMasterProfile(array $profiles): DataObject\Customer
    {
        // If you have a "sourceSystem" or similar field, define its priority here.
        // Example mapping: CRM (3) > DealerSystem (2) > Website (1) > Other (0)
        $sourcePriority = [
            'CRM'          => 3,
            'DEALER'       => 2,
            'WEBSITE'      => 1,
        ];

        $scored = [];

        foreach ($profiles as $profile) {
            $score = 0;

            $dealerId = (string)$profile->getDealer_id();
            $email    = (string)$profile->getEmail();
            $phone    = (string)$profile->getPhone();
            $name     = (string)$profile->getName();
            $region   = (string)$profile->getRegion();
            $territory = (string)$profile->getTerritory();
            $segments = (array)$profile->getSegments();
            $lastEventDate = $profile->getLastEventDate(); // Carbon|DateTime|null
            $modified = $profile->getModificationDate();
            $created  = $profile->getCreationDate();

            // 1) DealerID preference (B2B anchor)
            if ($dealerId !== '') {
                $score += 50;
            }

            // 2) Source priority, if you have something like getSourceSystem()
            $source = method_exists($profile, 'getSourceSystem') ? (string)$profile->getSourceSystem() : '';
            if ($source !== '' && isset($sourcePriority[$source])) {
                $score += $sourcePriority[$source] * 10;
            }

            // 3) Data completeness: count the non-empty fields
            $completenessFields = [
                $email,
                $phone,
                $name,
                $region,
                $territory,
                $dealerId,
            ];
            $filledCount = 0;
            foreach ($completenessFields as $f) {
                if (trim((string)$f) !== '') {
                    $filledCount++;
                }
            }
            // each filled field adds 2 points
            $score += $filledCount * 2;

            // additional weight if there is at least one segment
            if (count($segments) > 0) {
                $score += 2;
            }

            // 4) Recency: prefer the most recent activity
            if ($lastEventDate instanceof \DateTimeInterface) {
                $score += 5;
            }

            // small bonus for more recent modification date
            if ($modified) {
                // normalize to smaller number to avoid overflow
                $score += (int)floor($modified / 1000000);
            }

            $scored[] = [
                'profile' => $profile,
                'score'   => $score,
                'modified'=> $modified ?: 0,
                'created' => $created ?: 0,
            ];
        }

        // Sort by: score DESC, modified DESC, created ASC
        usort($scored, function (array $a, array $b) {
            // score DESC
            if ($a['score'] !== $b['score']) {
                return $b['score'] <=> $a['score'];
            }

            // modified DESC
            if ($a['modified'] !== $b['modified']) {
                return $b['modified'] <=> $a['modified'];
            }

            // created ASC (older record wins if still tie)
            return $a['created'] <=> $b['created'];
        });

        return $scored[0]['profile'];
    }
}

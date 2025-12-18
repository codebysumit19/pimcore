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
    description: 'Import customers with identity resolution and master-profile enrichment'
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

        // name,email,phone,dealer_id,region,territory,engagementsource,segment,isMasterProfile,last event date
        $header = fgetcsv($handle);
        if ($header === false) {
            $this->writeError('Empty CSV (no header row).');
            return 1;
        }

        $rowNumber = 0;
        $created   = 0;
        $updated   = 0;
        $enriched  = 0;

        while (($row = fgetcsv($handle)) !== false) {
            $rowNumber++;

            // always 10 columns
            $row = array_pad($row, 10, '');

            [
                $name,
                $email,
                $phone,
                $dealerId,
                $region,
                $territory,
                $engagementSource,
                $segment,
                $isMasterProfileCsv,
                $lastEventDate,
            ] = $row;  // [file:531]

            $email             = trim((string)$email);
            $phone             = trim((string)$phone);
            $dealerId          = trim((string)$dealerId);
            $isMasterProfileCsv = trim((string)$isMasterProfileCsv); // "Yes" / "No"

            // ---------- 1. Find existing master (if any) ----------
            $customer = null;

            // by email
            if ($email !== '') {
                $existing = DataObject\Customer::getByEmail($email, 1);
                if ($existing instanceof DataObject\Customer && $existing->getIsMasterProfile() === 'Yes') {
                    $customer = $existing;
                }
            }

            // by phone
            if (!$customer && $phone !== '') {
                $existing = DataObject\Customer::getByPhone($phone, 1);
                if ($existing instanceof DataObject\Customer && $existing->getIsMasterProfile() === 'Yes') {
                    $customer = $existing;
                }
            }

            // by dealer_id
            if (!$customer && $dealerId !== '') {
                $existing = DataObject\Customer::getByDealer_id($dealerId, 1);
                if ($existing instanceof DataObject\Customer && $existing->getIsMasterProfile() === 'Yes') {
                    $customer = $existing;
                }
            }

            $isMasterRow = ($isMasterProfileCsv === 'Yes');

            // ---------- 2. Decide create/update/enrich ----------
            if ($isMasterRow) {
                // This row is master = Yes
                if ($customer instanceof DataObject\Customer) {
                    // update existing master
                    $updated++;
                } else {
                    // create new master
                    $customer = new DataObject\Customer();
                    $customer->setParent($customersFolder);

                    $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
                    $customer->setKey($key);
                    $customer->setPublished(true);

                    $created++;
                }

                // ensure object marked as master
                $customer->setIsMasterProfile('Yes');
            } else {
                // Fragment row (No) → only enrich if master exists, never create
                if (!$customer instanceof DataObject\Customer) {
                    // no master yet for this identity → ignore this fragment
                    continue;
                }
                $enriched++;
            }

            // ---------- 3. Merge data into the master object ----------
            // For both master rows and fragment rows we enrich the master

            if (!empty($name)) {
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
            if (!empty($region)) {
                $customer->setRegion($region);
            }
            if (!empty($territory)) {
                $customer->setTerritory($territory);
            }
            if (!empty($engagementSource)) {
                $customer->setEngagementsource($engagementSource);
            }

            // merge segments from all rows (Yes + No)
            $segments = (array)$customer->getSegments();
            if (!empty($segment)) {
                $segments[] = $segment;
            }
            $segments = array_values(array_unique(array_filter(array_map('trim', $segments))));
            $customer->setSegments($segments);

            // last event date: keep latest across all rows
            if (!empty($lastEventDate)) {
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

        $this->writeInfo(
            "Customer import finished. Created $created master customers, ".
            "updated $updated masters, enriched $enriched fragment rows."
        );
        return 0;
    }
}

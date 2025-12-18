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
    description: 'Import customers from CSV into /Customers with identity resolution & master profile'
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

        // Header: name,email,phone,dealer_id,region,territory,engagementsource,segment,isMasterProfile,last event date
        $header = fgetcsv($handle);
        if ($header === false) {
            $this->writeError('Empty CSV (no header row).');
            return 1;
        }

        $rowNumber = 0;
        $created   = 0;
        $updated   = 0;
        $skipped   = 0;

        while (($row = fgetcsv($handle)) !== false) {
            $rowNumber++;

            // always have 10 columns, fill missing with ''
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
                $isMasterProfileCsv, // Yes / No
                $lastEventDate,
            ] = $row; // [file:531]

            $email            = trim((string)$email);
            $phone            = trim((string)$phone);
            $dealerId         = trim((string)$dealerId);
            $isMasterProfileCsv = trim((string)$isMasterProfileCsv);

            // ---------- Identity resolution ----------
            $customer = null;

            // 1) by email
            if ($email !== '') {
                $existing = DataObject\Customer::getByEmail($email, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }

            // 2) by phone
            if (!$customer && $phone !== '') {
                $existing = DataObject\Customer::getByPhone($phone, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }

            // 3) by dealer_id
            if (!$customer && $dealerId !== '') {
                $existing = DataObject\Customer::getByDealer_id($dealerId, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }

            // ---------- Master profile rule ----------
            // If this CSV row is NOT marked as master (No/Empty),
            // do NOT create/update a customer; treat it as a fragment only.
            if (strtolower($isMasterProfileCsv) !== 'yes') {
                $skipped++;
                continue;
            }

            // At this point, the row is master = Yes.
            // If we found a customer and it is master, we merge.
            // If found but not master, we ignore that one and create a new master.
            if ($customer instanceof DataObject\Customer && $customer->getIsMasterProfile() !== 'Yes') {
                $customer = null;
            }

            // ---------- Create or update ----------
            if ($customer instanceof DataObject\Customer) {
                // existing master → update
                $updated++;
            } else {
                // new master → create
                $customer = new DataObject\Customer();
                $customer->setParent($customersFolder);

                $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
                $customer->setKey($key);
                $customer->setPublished(true);

                $created++;
            }

            // mark as master in object
            $customer->setIsMasterProfile('Yes');

            // ---------- Map fields ----------
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

            // merge segments
            $segments = (array)$customer->getSegments();
            if (!empty($segment)) {
                $segments[] = $segment;
            }
            $segments = array_values(array_unique(array_filter(array_map('trim', $segments))));
            $customer->setSegments($segments);

            // last event date: keep latest
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

        $this->writeInfo("Customer import finished. Created $created master customers, updated $updated master customers, skipped $skipped fragment rows.");
        return 0;
    }
}

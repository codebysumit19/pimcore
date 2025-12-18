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
        // 1) CSV location (relative to project root)
        $csvPath = PIMCORE_PROJECT_ROOT . '/var/import/customers.csv';

        if (!is_readable($csvPath)) {
            $this->writeError('CSV not readable: ' . $csvPath);
            return 1;
        }

        // 2) Ensure /Customers folder exists and get it
        /** @var DataObject\Folder $customersFolder */
        $customersFolder = ObjectService::createFolderByPath('/Customers');

        // 3) Open CSV
        if (($handle = fopen($csvPath, 'r')) === false) {
            $this->writeError('Cannot open CSV file');
            return 1;
        }

        // Expected header:
        // name,email,phone,dealer_id,region,territory,engagementsource,segment,isMasterProfile,last event date
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

            // CSV has 10 columns
            if (count($row) < 10) {
                $this->writeError("Row $rowNumber has fewer than 10 columns, skipping.");
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
                $isMasterProfileCsv, // "Yes" / "No" from CSV
                $lastEventDate,
            ] = $row; // matches customers.csv [file:530]

            $email            = trim((string)$email);
            $phone            = trim((string)$phone);
            $dealerId         = trim((string)$dealerId);
            $isMasterProfileCsv = trim((string)$isMasterProfileCsv);

            // ---------- Identity resolution (find existing master profile) ----------
            $customer = null;

            // 1) match by email
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

            // 4) if found but NOT a master profile, do NOT merge into it
            // IsMasterProfile is a Select with values: Empty / Yes / No [image:1]
            if ($customer instanceof DataObject\Customer && $customer->getIsMasterProfile() !== 'Yes') {
                $customer = null;
            }

            // ---------- Create or update ----------
            if ($customer instanceof DataObject\Customer) {
                // existing master profile → UPDATE / merge
                $updated++;
            } else {
                // new master profile → CREATE
                $customer = new DataObject\Customer();
                $customer->setParent($customersFolder);

                $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
                $customer->setKey($key);
                $customer->setPublished(true);

                // If CSV row says this is master, mark Yes; otherwise you can decide (here we default to Yes)
                if ($isMasterProfileCsv !== '') {
                    $customer->setIsMasterProfile($isMasterProfileCsv); // "Yes" or "No"
                } else {
                    $customer->setIsMasterProfile('Yes');
                }

                $created++;
            }

            // Map CSV fields to object fields (overwrite / enrich)
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

            // isMasterProfile: keep in sync with CSV if provided
            if ($isMasterProfileCsv !== '') {
                $customer->setIsMasterProfile($isMasterProfileCsv); // Select value
            }

            // merge segments: take old segments + new segment, unique
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

            // Save (create or update)
            $customer->save();
        }

        fclose($handle);

        $this->writeInfo("Customer import finished. Created $created customers, updated $updated customers.");
        return 0;
    }
}

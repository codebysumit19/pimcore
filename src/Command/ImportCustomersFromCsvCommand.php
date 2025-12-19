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
        // name,email,phone,dealer_id,region,territory,engagementsource,segment,last event date
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

//Uses list assignment to map CSV columns into individual variables.

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

//Normalizes identifiers by trimming whitespace and casting to string.

            $email    = trim((string)$email);
            $phone    = trim((string)$phone);
            $dealerId = trim((string)$dealerId);


            // ---------- Identity resolution ----------
            // 1) try match by email (primary)
            $customer = null;
            if ($email !== '') {
                $existing = DataObject\Customer::getByEmail($email, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }


            // 2) if not found and phone present, try match by phone
            if (!$customer && $phone !== '') {
                $existing = DataObject\Customer::getByPhone($phone, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }


            // 3) if still not found and dealer_id present, match by dealer_id (B2B)
            if (!$customer && $dealerId !== '') {
                $existing = DataObject\Customer::getByDealer_id($dealerId, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }


            // ---------- Create or update ----------
            if ($customer instanceof DataObject\Customer) {
                // existing profile → UPDATE
                $updated++;
            } else {
                // new profile → CREATE
                $customer = new DataObject\Customer();
                $customer->setParent($customersFolder);


                $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
                $customer->setKey($key);
                $customer->setPublished(true);


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


            // overwrite segments from CSV, do NOT merge
            if (!empty($segment)) {
                // if your segments field is multiselect but CSV has a single value
                $customer->setSegments([$segment]);
            } else {
                // if CSV is empty, you can either clear or keep old value.
                // To clear:
                // $customer->setSegments([]);
            }


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


        $this->writeInfo("Customer import finished. Created $created objects, updated $updated objects.");
        return 0;
    }
}

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
    description: 'Import customers from CSV into /Customers data object folder'
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

        $rowNumber = 0; // will give customer1, customer2, ...
        $created   = 0;

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

            // 4) Create new Customer object
            $customer = new DataObject\Customer();
            $customer->setParent($customersFolder);

            // Object key = customer1, customer2, ...
            $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
            $customer->setKey($key);
            $customer->setPublished(true);

            // 5) Map CSV fields to object fields
            $customer->setName($name);
            $customer->setEmail($email);
            $customer->setPhone($phone);
            $customer->setDealer_id($dealerId);          // field dealer_id
            $customer->setRegion($region);
            $customer->setTerritory($territory);
            $customer->setEngagementsource($engagementSource);
            $customer->setSegments([$segment]);          // multiselection expects array

            if (!empty($lastEventDate)) {
    try {
        // create Carbon instance instead of DateTime
        $date = Carbon::parse($lastEventDate);
        $customer->setLastEventDate($date);
    } catch (\Exception $e) {
        $this->writeError("Row $rowNumber: invalid date '$lastEventDate', skipping date.");
    }
}


            // 6) Save
            $customer->save();
            $created++;
        }

        fclose($handle);

        $this->writeInfo("Customer import finished. Created $created objects.");
        return 0;
    }
}

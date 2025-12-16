<?php

namespace App\Command;

use Carbon\Carbon;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Customer;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:import-customers-csv',
    description: 'Create /Customer folder and import customers from CSV'
)]
class ImportCustomersFromCsvCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // 1) Ensure /Customer folder exists
        $parentPath = '/Customers';
$parent = DataObject::getByPath($parentPath);

if (!$parent) {
    $output->writeln('Folder /Customers not found, creating it...');
    $parent = new DataObject\Folder();
    $parent->setKey('Customers');
    $parent->setParentId(1); // root "/"
    $parent->save();
} else {
    $output->writeln('Using existing folder /Customers');
}


        // 2) Open CSV file
        $filePath = PIMCORE_PROJECT_ROOT . '/var/import/customers_500.csv';
        if (!file_exists($filePath)) {
            $output->writeln("<error>CSV not found: {$filePath}</error>");
            return Command::FAILURE;
        }

        if (($handle = fopen($filePath, 'r')) === false) {
            $output->writeln('<error>Cannot open CSV file</error>');
            return Command::FAILURE;
        }

        // 3) Read header
        $header = fgetcsv($handle, 0, ',');
        if ($header === false) {
            $output->writeln('<error>Empty CSV</error>');
            return Command::FAILURE;
        }

        $rowNum = 0;
        while (($row = fgetcsv($handle, 0, ',')) !== false) {
            $rowNum++;
            // match header order
            [
                $name,
                $email,
                $phone,
                $dealerId,
                $region,
                $territory,
                $source,
                $segment,
                $lastEventDate,
            ] = $row;

            if (!$email) {
                $output->writeln("Row {$rowNum}: missing email, skipping");
                continue;
            }

            // 4) Update or create by email
            $customer = Customer::getByEmail($email, 1);
            if (!$customer instanceof Customer) {
                $customer = new Customer();
                $key = ElementService::getValidKey($name ?: $email, 'object');
                $customer->setKey($key);
                $customer->setParent($parent);
            }

            $customer->setPublished(true);
            $customer->setName($name ?: $email);
            $customer->setEmail($email);
            $customer->setPhone($phone);
            $customer->setDealer_id($dealerId);
            $customer->setRegion($region);
            $customer->setTerritory($territory);
            $customer->setEngagementsource($source);
            $customer->setSegments([$segment]);

            if ($lastEventDate) {
                $date = Carbon::parse($lastEventDate);
                $customer->setLastEventDate($date);
            }

            $customer->save();
        }

        fclose($handle);
        $output->writeln('CSV import finished.');
        return Command::SUCCESS;
    }
}

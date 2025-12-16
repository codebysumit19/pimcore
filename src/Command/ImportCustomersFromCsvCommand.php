<?php

namespace App\Command;

use Carbon\Carbon;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Customer;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:import-customers-csv',
    description: 'Create /Customers folder and import customers from CSV'
)]
class ImportCustomersFromCsvCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // 1) Ensure /Customers folder exists in Data Objects tree
        $parentPath = '/Customers';
        $parent = DataObject::getByPath($parentPath);

        if (!$parent instanceof Folder) {
            $output->writeln('Folder /Customers not found, creating it...');
            $parent = new Folder();
            $parent->setKey('Customers');
            $parent->setParentId(1); // root "/"
            $parent->save();
            $output->writeln('Created folder /Customers');
        } else {
            $output->writeln('Using existing folder /Customers');
        }

        // 2) CSV path
        $filePath = PIMCORE_PROJECT_ROOT . '/var/import/customers_500.csv';

        if (!file_exists($filePath)) {
            $output->writeln("<error>CSV not found: {$filePath}</error>");
            return Command::FAILURE;
        }

        if (($handle = fopen($filePath, 'r')) === false) {
            $output->writeln('<error>Cannot open CSV file</error>');
            return Command::FAILURE;
        }

        // 3) Read header row
        $header = fgetcsv($handle, 0, ',');
        if ($header === false) {
            $output->writeln('<error>Empty CSV</error>');
            fclose($handle);
            return Command::FAILURE;
        }

        // Expected order:
        // name,email,phone,dealer_id,region,territory,engagementsource,segment,last event date

        $rowNum = 0;
        while (($row = fgetcsv($handle, 0, ',')) !== false) {
            $rowNum++;

            if (count($row) < 9) {
                $output->writeln("Row {$rowNum}: not enough columns, skipping");
                continue;
            }

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

            // 4) Get or create customer by email
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
            $customer->setSegments([$segment]); // CSV "segment" → Pimcore "segments"

            if (!empty($lastEventDate)) {
                try {
                    $date = Carbon::parse($lastEventDate);
                    $customer->setLastEventDate($date);
                } catch (\Throwable $e) {
                    $output->writeln("Row {$rowNum}: invalid date '{$lastEventDate}', skipping date");
                }
            }

            $customer->save();
            $output->writeln("Imported/updated: {$name} ({$email})");
        }

        fclose($handle);
        $output->writeln('CSV import finished.');
        return Command::SUCCESS;
    }
}

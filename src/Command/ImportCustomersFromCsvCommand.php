<?php

namespace App\Command;

use Pimcore\Model\DataObject\Customer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportCustomersFromCsvCommand extends Command
{
    protected static $defaultName = 'app:import-customers';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $filePath = \PIMCORE_PROJECT_ROOT . '/var/import/customers_500.csv';

        if (!file_exists($filePath)) {
            $output->writeln('CSV file not found: ' . $filePath);
            return Command::FAILURE;
        }

        if (($handle = fopen($filePath, 'r')) === false) {
            $output->writeln('Cannot open CSV file.');
            return Command::FAILURE;
        }

        // Assuming first row is header
        $headers = fgetcsv($handle, 0, ';'); // adjust delimiter if needed

        while (($row = fgetcsv($handle, 0, ';')) !== false) {
            $data = array_combine($headers, $row);

            $customer = new Customer();
            $customer->setKey(uniqid('cust_'));
            $customer->setParentId(1); // adjust parent folder ID
            $customer->setPublished(true);

            // Example: adapt to your real field names
            if (isset($data['firstname'])) {
                $customer->setFirstname($data['firstname']);
            }
            if (isset($data['lastname'])) {
                $customer->setLastname($data['lastname']);
            }
            if (isset($data['email'])) {
                $customer->setEmail($data['email']);
            }

            $customer->save();
        }

        fclose($handle);

        $output->writeln('Customers imported from CSV.');

        return Command::SUCCESS;
    }
}

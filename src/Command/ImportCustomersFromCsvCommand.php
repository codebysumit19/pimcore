<?php

namespace App\Command;

use Pimcore\Model\DataObject\Customer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportCustomersFromCsvCommand extends Command
{
    // IMPORTANT: must not be null
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

        // adjust delimiter if needed
        $headers = fgetcsv($handle, 0, ';');

        while (($row = fgetcsv($handle, 0, ';')) !== false) {
            $data = array_combine($headers, $row);

            $customer = new Customer();
            $customer->setKey(uniqid('cust_'));
            $customer->setParentId(1); // TODO: correct folder ID
            $customer->setPublished(true);

            // TODO: adjust to your real fields
            $customer->setFirstname($data['firstname'] ?? '');
            $customer->setLastname($data['lastname'] ?? '');
            $customer->setEmail($data['email'] ?? '');

            $customer->save();
        }

        fclose($handle);

        $output->writeln('Customers imported from CSV.');

        return Command::SUCCESS;
    }
}

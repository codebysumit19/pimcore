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
    name: 'app:generate-customers',
    description: 'Generate 50 demo Customer objects for CDP POC'
)]
class GenerateCustomersCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Parent folder in Data Objects tree (you have "Customer" folder already)
        $parentPath = '/Customer';
        $parent = DataObject::getByPath($parentPath);

        if (!$parent) {
            $output->writeln('Folder /Customer not found, creating it...');

            $parent = new DataObject\Folder();
            $parent->setKey('Customer');
            $parent->setParentId(1); // 1 = root "/"
            $parent->save();

            $output->writeln('Created folder /Customer');
        } else {
            $output->writeln('Using existing folder /Customer');
        }

        // Arrays for random data
        $regions = ['North', 'South', 'East', 'West'];
        $territories = ['Mumbai', 'Delhi', 'Bangalore', 'Chennai', 'Hyderabad', 'Pune', 'Kolkata'];
        $sources = ['Solutionara', 'Email', 'Web'];
        $segmentsOptions = [
            'High-Value Customers',
            'Frequent Buyers',
            'Inactive 90 Days',
            'Campaign Prospects',
        ];

        // Create 50 customers
        for ($i = 6; $i <= 450; $i++) {
            $email = "demo.customer{$i}@company.com";

            if (method_exists(Customer::class, 'getByEmail')) {
                $existing = Customer::getByEmail($email, 1);
                if ($existing instanceof Customer) {
                    $output->writeln("Skipping, already exists: $email");
                    continue;
                }
            }

            $customer = new Customer();

            $name = "Demo Customer {$i}";
            $key  = ElementService::getValidKey($name, 'object');

            $customer->setKey($key);
            $customer->setParent($parent);
            $customer->setPublished(true);

            // Basic identity
            $customer->setName($name);
            $customer->setEmail($email);
            $customer->setPhone('98765' . str_pad((string)$i, 5, '0', STR_PAD_LEFT));

            // Dealer & location
            $dealerId = 'D' . str_pad((string)rand(1, 4), 3, '0', STR_PAD_LEFT);
            $customer->setDealer_id($dealerId);
            $region    = $regions[array_rand($regions)];
            $territory = $territories[array_rand($territories)];
            $source    = $sources[array_rand($sources)];

            $customer->setRegion($region);
            $customer->setTerritory($territory);
            $customer->setEngagementsource($source);

            // Segments: choose 1–2 randomly
            shuffle($segmentsOptions);
            $segments = array_slice($segmentsOptions, 0, rand(1, 2));
            $customer->setSegments($segments);

            // LastEventDate: some recent, some old
            $daysAgo = rand(0, 150);
            $date = Carbon::now()->subDays($daysAgo);
            $customer->setLastEventDate($date);

            $customer->save();

            $output->writeln("Created customer: {$name} ({$email})");
        }

        $output->writeln('Done generating 50 demo customers.');
        return Command::SUCCESS;
    }
}

<?php

namespace App\Command;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Customer;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCustomersCommand extends Command
{
    // The name of the command, used like: php bin/console app:generate-customers
    protected static $defaultName = 'app:generate-customers';

    protected function configure(): void
    {
        $this
            ->setDescription('Generate 50 demo Customer objects for CDP POC');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // 1) Get or create /Customers folder as parent
        $parentPath = '/Customers';
        $parent = DataObject::getByPath($parentPath);

        if (!$parent) {
            $output->writeln('Folder /Customers not found, creating it...');

            $parent = new DataObject\Folder();
            $parent->setKey('Customers');
            $parent->setParentId(1); // 1 = root "/"
            $parent->save();

            $output->writeln('Created folder /Customers');
        } else {
            $output->writeln('Using existing folder /Customers');
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

        // 2) Create 50 customers
        for ($i = 1; $i <= 50; $i++) {
            $email = "demo.customer{$i}@company.com";

            // If your Customer class has a static getter by email, use it.
            // If not, you can remove this block and always create new ones.
            if (method_exists(Customer::class, 'getByEmail')) {
                $existing = Customer::getByEmail($email, 1);
                if ($existing instanceof Customer) {
                    $output->writeln("Skipping, already exists: $email");
                    continue;
                }
            }

            $customer = new Customer();

            $name = "Demo Customer {$i}";
            $key = ElementService::getValidKey($name, 'object');

            $customer->setKey($key);
            $customer->setParent($parent);
            $customer->setPublished(true);

            // Basic identity
            $customer->setName($name);
            $customer->setEmail($email);
            $customer->setPhone('98765' . str_pad((string)$i, 5, '0', STR_PAD_LEFT));

            // Dealer & location
            $dealerId = 'D' . str_pad((string)rand(1, 4), 3, '0', STR_PAD_LEFT);
            $customer->setDealerID($dealerId);

            $region = $regions[array_rand($regions)];
            $territory = $territories[array_rand($territories)];
            $source = $sources[array_rand($sources)];

            $customer->setRegion($region);
            $customer->setTerritory($territory);
            $customer->setEngagementSource($source);

            // Segments: choose 1–2 randomly
            shuffle($segmentsOptions);
            $segments = array_slice($segmentsOptions, 0, rand(1, 2));
            $customer->setSegments($segments);

            // LastEventDate: some recent, some old (to demo "inactive 90 days")
            $daysAgo = rand(0, 150); // 0 = today, up to ~5 months ago
            $date = new \DateTime();
            $date->modify("-{$daysAgo} days");
            $customer->setLastEventDate($date);

            // Save object in Pimcore
            $customer->save();

            $output->writeln("Created customer: {$name} ({$email})");
        }

        $output->writeln('Done generating 50 demo customers.');
        return Command::SUCCESS;
    }
}

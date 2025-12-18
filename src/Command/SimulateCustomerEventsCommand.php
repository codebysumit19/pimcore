<?php

namespace App\Command;

use Carbon\Carbon; // for eventTime
use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Customer;
use Pimcore\Model\DataObject\CustomerEvent;
use Pimcore\Model\DataObject\Service as ObjectService;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:simulate-events',
    description: 'Create mock events (Product View, Catalog Download, Price Request, Dealer Inquiry) for customers'
)]
class SimulateCustomerEventsCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Create /CustomerEvents folder if it does not exist
        /** @var DataObject\Folder $eventsFolder */
        $eventsFolder = ObjectService::createFolderByPath('/CustomerEvents'); // [web:379][web:191]

        // Load some customers
        $list = new DataObject\Customer\Listing();
        $list->setLimit(100);

        // Possible event types
        $types = ['ProductView', 'CatalogDownload', 'PriceRequest', 'DealerInquiry'];

        $created = 0;

        foreach ($list as $customer) {
            if (!$customer instanceof Customer) {
                continue;
            }

            // create 3 random events per customer
            for ($i = 0; $i < 3; $i++) {
                $type = $types[array_rand($types)];

                $event = new CustomerEvent();
                $event->setParent($eventsFolder);
                $event->setKey(
                    ElementService::getValidKey(
                        'event_' . $customer->getId() . '_' . uniqid(),
                        'object'
                    )
                );
                $event->setPublished(true);

                // required fields on CustomerEvent
                $event->setCustomer($customer);      // relation field "customer"
                $event->setEventType($type);         // select field "eventType"

                // Date & time field "eventTime" expects Carbon
                $daysAgo = rand(0, 30);
                $event->setEventTime(Carbon::now()->subDays($daysAgo)); // [web:406][web:407]

                // Optional description / note
                $event->setMeta('Mock event generated for demo'); // input/textarea field "meta"

                $event->save();
                $created++;
            }
        }

        $this->writeInfo("Created $created mock customer events.");
        return 0;
    }
}

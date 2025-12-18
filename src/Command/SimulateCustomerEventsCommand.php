<?php

namespace App\Command;

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
        // Ensure /CustomerEvents folder exists
        /** @var DataObject\Folder $eventsFolder */
        $eventsFolder = ObjectService::createFolderByPath('/CustomerEvents');

        // Load some customers
        $list = new DataObject\Customer\Listing();
        $list->setLimit(100); // simulate for first 100 customers

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
                $event->setKey(ElementService::getValidKey(
                    'event_' . $customer->getId() . '_' . uniqid(),
                    'object'
                ));
                $event->setPublished(true);

                $event->setCustomer($customer);
                // use eventType field instead of type
                $event->setEventType($type);
                $event->setEventTime(new \DateTime('-' . rand(0, 30) . ' days'));

                // Optional context
                if ($type === 'ProductView') {
                    $event->setProductId('P' . rand(100, 999));
                } elseif ($type === 'DealerInquiry' || $type === 'PriceRequest') {
                    $event->setDealerId($customer->getDealer_id());
                }

                $event->setMeta('Mock event generated for demo');

                $event->save();
                $created++;
            }
        }

        $this->writeInfo("Created $created mock customer events.");
        return 0;
    }
}

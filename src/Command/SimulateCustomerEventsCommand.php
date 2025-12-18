<?php

namespace App\Command;

use Carbon\Carbon;
use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Customer;
use Pimcore\Model\DataObject\Events;              // <-- renamed
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
        /** @var DataObject\Folder $eventsFolder */
        $eventsFolder = ObjectService::createFolderByPath('/CustomerEvents');

        $list = new DataObject\Customer\Listing();
        $list->setLimit(100);

        $types = ['ProductView', 'CatalogDownload', 'PriceRequest', 'DealerInquiry'];

        $created = 0;

        foreach ($list as $customer) {
            if (!$customer instanceof Customer || !$customer->getId()) {
                continue;
            }

            for ($i = 0; $i < 3; $i++) {
                $type = $types[array_rand($types)];

                $event = new Events();   // <-- use Events class
                $event->setParent($eventsFolder);
                $event->setKey(
                    ElementService::getValidKey(
                        'event_' . $customer->getId() . '_' . uniqid(),
                        'object'
                    )
                );
                $event->setPublished(true);

                // relation field (make sure field is still named "customer")
                $event->setCustomer($customer);

                // select field
                $event->setEventType($type);

                // datetime field
                $event->setEventTime(Carbon::now()->subDays(rand(0, 30)));

                // text field
                $event->setMeta('Mock event generated for demo');

                $event->save();
                $created++;
            }
        }

        $this->writeInfo("Created $created mock customer events.");
        return 0;
    }
}

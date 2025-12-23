namespace App\Command;

use Carbon\Carbon;
use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Customer;
use Pimcore\Model\DataObject\Events;
use Pimcore\Model\DataObject\Service as ObjectService;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:simulate-events',
    description: 'Create one mock event per customer'
)]
class SimulateCustomerEventsCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /** @var DataObject\Folder $eventsFolder */
        $eventsFolder = ObjectService::createFolderByPath('/CustomerEvents');

        $list = new DataObject\Customer\Listing();
        // remove or change limit as you like
        $list->setLimit(10);

        $types   = ['ProductView', 'CatalogDownload', 'PriceRequest', 'DealerInquiry'];
        $created = 0;
        $index   = 1; // for event1, event2, ...

        foreach ($list as $customer) {
            if (!$customer instanceof Customer || !$customer->getId()) {
                continue;
            }

            // one event per customer
            $type = $types[array_rand($types)];

            $event = new Events();
            $event->setParent($eventsFolder);

            // key: event1, event2, ... (still run through getValidKey for safety)
            $rawKey = 'event' . $index;
            $key    = ElementService::getValidKey($rawKey, 'object');
            $event->setKey($key);

            $event->setPublished(true);

            // many-to-one relation to this customer
            $event->setCustomer($customer);

            $event->setEventType($type);
            $event->setDescription('Mock ' . $type . ' event');

            // random time in last 30 days
            $event->setEventTime(Carbon::now()->subDays(rand(0, 30)));

            $event->save();
            $created++;
            $index++;
        }

        $this->writeInfo("Created $created mock customer events.");
        return 0;
    }
}

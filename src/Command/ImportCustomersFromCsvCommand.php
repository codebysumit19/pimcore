<?php

namespace App\Command;

use Carbon\Carbon;
use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Service as ObjectService;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:import-customers',
    description: 'Import customers with identity resolution and master-profile enrichment'
)]
class ImportCustomersFromCsvCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $csvPath = PIMCORE_PROJECT_ROOT . '/var/import/customers.csv';

        if (!is_readable($csvPath)) {
            $this->writeError('CSV not readable: ' . $csvPath);
            return 1;
        }

        /** @var DataObject\Folder $customersFolder */
        $customersFolder = ObjectService::createFolderByPath('/Customers');

        if (($handle = fopen($csvPath, 'r')) === false) {
            $this->writeError('Cannot open CSV file');
            return 1;
        }

        // name,email,phone,dealer_id,region,territory,engagementsource,segment,isMasterProfile,last event date
        $header = fgetcsv($handle);
        if ($header === false) {
            $this->writeError('Empty CSV (no header row).');
            return 1;
        }

        $rowNumber = 0;
        $created   = 0;
        $updated   = 0;
        $enriched  = 0;
        $skipped   = 0;

        while (($row = fgetcsv($handle)) !== false) {
            $rowNumber++;

            $row = array_pad($row, 10, '');

            [
                $name,
                $email,
                $phone,
                $dealerId,
                $region,
                $territory,
                $engagementSource,
                $segment,
                $isMasterProfileCsv,
                $lastEventDate,
            ] = $row; // [file:531]

            $email             = trim((string)$email);
            $phone             = trim((string)$phone);
            $dealerId          = trim((string)$dealerId);
            $isMasterProfileCsv = trim((string)$isMasterProfileCsv); // "Yes" / "No"

            $isMasterRow = ($isMasterProfileCsv === 'Yes');

            // ---------- 1. Find any existing customer for this identity ----------
            $customer = null;

            if ($email !== '') {
                $existing = DataObject\Customer::getByEmail($email, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }

            if (!$customer && $phone !== '') {
                $existing = DataObject\Customer::getByPhone($phone, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }

            if (!$customer && $dealerId !== '') {
                $existing = DataObject\Customer::getByDealer_id($dealerId, 1);
                if ($existing instanceof DataObject\Customer) {
                    $customer = $existing;
                }
            }

            // ---------- 2. Decide what to do ----------
            if (!$customer) {
                // no customer yet for this identity
                if (!$isMasterRow) {
                    // fragment but no master exists → skip
                    $skipped++;
                    continue;
                }

                // create first master for this identity
                $customer = new DataObject\Customer();
                $customer->setParent($customersFolder);

                $key = ElementService::getValidKey('customer' . $rowNumber, 'object');
                $customer->setKey($key);
                $customer->setPublished(true);

                $created++;
            } else {
                // customer exists → merge into it
                if ($customer->getIsMasterProfile() !== 'Yes' && $isMasterRow) {
                    // upgrade existing to master if this row is master
                    $customer->setIsMasterProfile('Yes');
                }
                $enriched++;
            }

            // ensure master flag for Yes rows
            if ($isMasterRow) {
                $customer->setIsMasterProfile('Yes');
            }

            // ---------- 3. Merge fields ----------
            if (!empty($name)) {
                $customer->setName($name);
            }
            if ($email !== '') {
                $customer->setEmail($email);
            }
            if ($phone !== '') {
                $customer->setPhone($phone);
            }
            if ($dealerId !== '') {
                $customer->setDealer_id($dealerId);
            }
            if (!empty($region)) {
                $customer->setRegion($region);
            }
            if (!empty($territory)) {
                $customer->setTerritory($territory);
            }
            if (!empty($engagementSource)) {
                $customer->setEngagementsource($engagementSource);
            }

            // merge segments from all rows
            $segments = (array)$customer->getSegments();
            if (!empty($segment)) {
                $segments[] = $segment;
            }
            $segments = array_values(array_unique(array_filter(array_map('trim', $segments))));
            $customer->setSegments($segments);

            // last event date: keep latest
            if (!empty($lastEventDate)) {
                try {
                    $newDate = Carbon::parse($lastEventDate);
                    $current = $customer->getLastEventDate();
                    if (!$current || $newDate->gt(Carbon::instance($current))) {
                        $customer->setLastEventDate($newDate);
                    }
                } catch (\Exception $e) {
                    $this->writeError("Row $rowNumber: invalid date '$lastEventDate', skipping date.");
                }
            }

            $customer->save();
        }

        fclose($handle);

        $this->writeInfo(
            "Customer import finished. Created $created masters, enriched $enriched rows, skipped $skipped rows without master."
        );
        return 0;
    }
}

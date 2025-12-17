<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Service as ObjectService;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:import-dealers',
    description: 'Import dealers from CSV into /Dealers data object folder'
)]
class ImportDealersFromCsvCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // 1) CSV location (relative to project root)
        $csvPath = PIMCORE_PROJECT_ROOT . '/var/import/dealers.csv';

        if (!is_readable($csvPath)) {
            $this->writeError('CSV not readable: ' . $csvPath);
            return 1;
        }

        // 2) Ensure /Dealers folder exists and get it
        /** @var DataObject\Folder $dealersFolder */
        $dealersFolder = ObjectService::createFolderByPath('/Dealers');

        // 3) Open CSV
        if (($handle = fopen($csvPath, 'r')) === false) {
            $this->writeError('Cannot open CSV file');
            return 1;
        }

        // Expected header:
        // dealer_id,name,region,territory,segments
        $header = fgetcsv($handle);
        if ($header === false) {
            $this->writeError('Empty CSV (no header row).');
            return 1;
        }

        $rowNumber = 0;
        $created   = 0;

        while (($row = fgetcsv($handle)) !== false) {
            $rowNumber++;

            if (count($row) < 5) {
                $this->writeError("Row $rowNumber has fewer than 5 columns, skipping.");
                continue;
            }

            [
                $dealerId,
                $name,
                $region,
                $territory,
                $segment,
            ] = $row;

            // 4) Create new Dealer object (your class must be DataObject\Dealers)
            $dealer = new DataObject\Dealer();  // <-- singular
            $dealer->setParent($dealersFolder);

            // Object key = dealer ID (e.g. D001, D002, ...)
            $key = ElementService::getValidKey($dealerId, 'object');
            $dealer->setKey($key);
            $dealer->setPublished(true);

            // 5) Map CSV fields to object fields
            $dealer->setDealer_id($dealerId);   // field dealer_id
            $dealer->setName($name);
            $dealer->setRegion($region);
            $dealer->setTerritory($territory);
            $dealer->setSegments([$segment]);   // multiselection expects array

            // 6) Save
            $dealer->save();
            $created++;
        }

        fclose($handle);

        $this->writeInfo("Dealer import finished. Created $created objects.");
        return 0;
    }
}

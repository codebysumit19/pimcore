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
    name: 'app:import-prospects',
    description: 'Import prospects from CSV into /Prospects data object folder'
)]
class ImportProspectsFromCsvCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // 1) CSV location (relative to project root)
        $csvPath = PIMCORE_PROJECT_ROOT . '/var/import/prospects.csv';

        if (!is_readable($csvPath)) {
            $this->writeError('CSV not readable: ' . $csvPath);
            return 1;
        }

        // 2) Ensure /Prospects folder exists and get it
        /** @var DataObject\Folder $prospectsFolder */
        $prospectsFolder = ObjectService::createFolderByPath('/Prospects');

        // 3) Open CSV
        if (($handle = fopen($csvPath, 'r')) === false) {
            $this->writeError('Cannot open CSV file');
            return 1;
        }

        // Expected header:
        // name,email,phone,campaignCode,engagementSource,segments
        $header = fgetcsv($handle);
        if ($header === false) {
            $this->writeError('Empty CSV (no header row).');
            return 1;
        }

        $rowNumber = 0; // will give prospect1, prospect2, ...
        $created   = 0;

        while (($row = fgetcsv($handle)) !== false) {
            $rowNumber++;

            if (count($row) < 6) {
                $this->writeError("Row $rowNumber has fewer than 6 columns, skipping.");
                continue;
            }

            [
                $name,
                $email,
                $phone,
                $campaignCode,
                $engagementSource,
                $segment,
            ] = $row;

            // 4) Create new Prospect object
            $prospect = new DataObject\Prospect();
            $prospect->setParent($prospectsFolder);

            // Object key = prospect1, prospect2, ...
            $key = ElementService::getValidKey('prospect' . $rowNumber, 'object');
            $prospect->setKey($key);
            $prospect->setPublished(true);

            // 5) Map CSV fields to object fields
            $prospect->setName($name);
            $prospect->setEmail($email);
            $prospect->setPhone($phone);
            $prospect->setCampaignCode($campaignCode);
            $prospect->setEngagementSource($engagementSource);
            $prospect->setSegments([$segment]); // multiselection expects array

            // 6) Save
            $prospect->save();
            $created++;
        }

        fclose($handle);

        $this->writeInfo("Prospect import finished. Created $created objects.");
        return 0;
    }
}

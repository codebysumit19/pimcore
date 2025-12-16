<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject;
use Pimcore\Model\Element\Service as ElementService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:setup-dataobject-folders',
    description: 'Create Customers, Dealers and Prospects data object folders under Home'
)]
class SetupDataObjectFoldersCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        foreach (['Customers', 'Dealers', 'Prospects'] as $name) {
            $folder = new DataObject\Folder();
            $folder->setKey(ElementService::getValidKey($name, 'object'));
            $folder->setParentId(1); // Home (root) in Data Objects
            $folder->save();

            $this->writeInfo(sprintf('Folder "%s" created (or already exists).', $name));
        }

        return 0;
    }
}

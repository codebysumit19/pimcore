<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\Folder;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateCustomersFolderCommand extends AbstractCommand
{
    protected function configure(): void
    {
        $this
            ->setName('app:create-customers-folder')
            ->setDescription('Create /Customers folder in Data Objects');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $folder = Folder::getByPath('/Customers');
        if (!$folder) {
            $folder = new Folder();
            $folder->setKey('Customers');
            $folder->setParentId(1); // root of Data Objects
            $folder->save();

            $this->writeInfo('Created /Customers folder with ID: ' . $folder->getId());
        } else {
            $this->writeInfo('Folder /Customers already exists with ID: ' . $folder->getId());
        }

        return self::SUCCESS;
    }
}

<?php

namespace App\Command;

use Pimcore\Model\DataObject\Service as ObjectService;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupFoldersCommand extends AbstractCommand
{
    protected function configure(): void
    {
        $this
            ->setName('app:setup-folders')
            ->setDescription('Create base data object folders');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        ObjectService::createFolderByPath('/Customer');
        ObjectService::createFolderByPath('/Dealer');
        ObjectService::createFolderByPath('/Prospect');

        $this->writeInfo('Folders created/ensured.');
        return 0;
    }
}

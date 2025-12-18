<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\Service as ObjectService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:setup-dataobject-folders',
    description: 'Create Customers, Dealers, Prospects and CustomerEvents data object folders under Home'
)]
class SetupDataObjectFoldersCommand extends AbstractCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // List of folders you want under Home
        $paths = [
            '/Customers',
            '/Dealers',
            '/Prospects',
            '/CustomerEvents',   // folder for CustomerEvent objects
        ];

        foreach ($paths as $path) {
            // This will create the folder if it does not exist, or return it if it already exists. [web:372][web:369]
            $folder = ObjectService::createFolderByPath($path);

            $this->writeInfo(sprintf(
                'Folder "%s" is ready (ID: %d).',
                $folder->getFullPath(),
                $folder->getId()
            ));
        }

        return 0;
    }
}

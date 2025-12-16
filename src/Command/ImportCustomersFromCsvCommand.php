<?php

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Folder;

// Create or get /Customers folder
$customersFolder = Folder::getByPath('/Customers');
if (!$customersFolder) {
    $customersFolder = new Folder();
    $customersFolder->setKey('Customers');
    $customersFolder->setParentId(1); // 1 = root of Data Objects
    $customersFolder->save();
}

// You can now use $customersFolder->getId() as parentId for imported customers.

<?php
//Get Data file from configured path
$customerRaw = file_get_contents(DATA_PATH . 'customer.json');
$customerRawList = json_decode($customerRaw, true);

//Create new instance of MusicCollection & add albums
$customerCollection = new customerCollection();
foreach ($customerRawList as $customerRaw) {
    $customerCollection->addCustomers($customerRaw);
}

//Get formatted albums objects & total
$customers = $customerCollection->getCustomers();


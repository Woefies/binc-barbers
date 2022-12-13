<?php
//Require DatabaseSelector to retrieving data
require_once dirname(__FILE__) . '/../classes/System/Databases/DatabaseSelector.php';

//Init the database
$db = new \System\Databases\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Create new instance of customerCollection & set albums
$customerCollection = new \System\customerCollection\Collection();
$customerCollection->set($db->getCustomers());

//Get formatted albums objects & total
$customers = $customerCollection->get();
$totalCustomers = $customerCollection->getTotal();

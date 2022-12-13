<?php

//Require DatabaseSelector to retrieving data
require_once dirname(__FILE__) . '/../classes/System/Databases/DatabaseSelector.php';

//Init the database
$db = new \System\Databases\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the record from the db
$customer = $db->getCustomerById($_GET['id']);

//Only execute delete when confirmed
if (isset($_GET['continue'])) {


    //Delete the record from the db
    $customer->delete($db->getConnection());


    //Redirect to homepage after deletion & exit script
    header('Location: index.php');
    exit;
}

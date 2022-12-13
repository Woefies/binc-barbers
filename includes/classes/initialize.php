<?php

use Databases\Database;

require_once 'settings.php';
require_once 'Databases/Database.php';
require_once 'customers/Customer.php';
require_once 'appointments/Appointment.php';
require_once 'customers/customerCollection.php';





try {
    $db = new Databases\Database(
        DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $connection = $db->getConnection();

    //get customers from db
    $query = 'SElECT * FROM customers';
    $customersFromDB = $connection->query($query)
        ->fetchAll(PDO::FETCH_CLASS, '\\Customers\\Customer');

    //Create new instance for class & add students
    $customersCollection = new customers\customerCollection();
    $customersCollection->setCustomers($customersFromDB);


    //Get variables for template
    $customers = $customersCollection->getCustomers();
    $totalCustomers = $customersCollection->getTotalCustomers();


} catch (Exception $e) {
    //Set error
    $errors[] = 'Oops, try to fix your error please: ' . $e->getMessage() . ' on line ' . $e->getLine() . ' of ' . $e->getFile();
}
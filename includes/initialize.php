<?php
require_once  'settings.php';
require_once 'classes/Customer.php';
require_once  'classes/Appointment.php';

try {
    //load data & convert to php array
    $customerRawData = file_get_contents(DATA_PATH . 'customer.json');
    $customerRawList = json_decode($customerRawData, true);
    // print_r($studentsRawList);

    //create new instance of an appointment
    $appointment = new Appointment();
    foreach ($customerRawList as $customerRaw) {
        $appointment->addCustomers($customerRaw);
    }

    //get variable for html
    $customers = $appointment->getCustomers();
} catch (Exception $e) {
    $error = 'Oops, something went wrong:' .
        $e->getMessage() . ' on line ' .
        $e->getLine() . ' of ' .
        $e->getFile();
}
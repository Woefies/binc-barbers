<?php

//Set default empty reservation & load POST logic
$reservation = new \System\ReservationCollection\Reservation();
require_once dirname(__FILE__) . '/includes/reservation-post-data.php';


//Database magic when no errors are found
if (isset($formData) && empty($errors)) {

    //Init the database
    $db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if (\System\ReservationCollection\Reservation::create($reservation, $db->getConnection())) {
        $success = 'Je afspraak is aangemaakt!';
        //Override to see a new empty form
        $reservation = new \System\ReservationCollection\Reservation('', '', '', '');
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}

//Default page title
$pageTitle = 'Create reservation';

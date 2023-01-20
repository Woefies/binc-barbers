<?php

//Init the database
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the record from the db
$reservation = \System\ReservationCollection\Reservation::getById($_GET['id'], $db->getConnection());

//Only execute delete when confirmed
if (isset($_GET['continue'])) {

    //Save the record to the db
    $reservation->delete($db->getConnection());

    //Redirect to homepage after deletion & exit script
    header('Location: dashboard');
    exit;
}

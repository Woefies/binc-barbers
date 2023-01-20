<?php
//Init the database
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

try {
    //Get the records from the db
    $reservation = \System\ReservationCollection\Reservation::getById($_GET['id'], $db->getConnection());

    //Default page title
    $pageTitle = $reservation->date;
} catch (Exception $e) {
    //Something went wrong on this level
    $errors[] = $e->getMessage();
    $pageTitle = 'Reservation does\'t exist';
}

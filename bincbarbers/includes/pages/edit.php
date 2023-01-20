<?php
//Init the database
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

try {
    //Get the record from the db
    $reservation = \System\ReservationCollection\Reservation::getById($_GET['id'], $db->getConnection());

    //Override logic for POST
    require_once dirname(__FILE__) . '/includes/reservation-post-data.php';

    //Database magic when no errors are found
    if (isset($formData) && empty($errors)) {

        //Save the record to the db
        if ($reservation->update($db->getConnection())) {
            $success = 'Your reservation has been updated in the database!';
        } else {
            $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
        }
    }

    //Default page title
    $pageTitle = 'Edit ' . $reservation->date;
} catch (Exception $e) {
    //Something went wrong on this level
    $errors[] = $e->getMessage();
    $pageTitle = 'Reservation does\'t exist';
}

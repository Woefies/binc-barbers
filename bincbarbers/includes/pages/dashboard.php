<?php
//If not logged in, redirect to login
/** @var System\Utils\Session $session */
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
} 
//Init the database
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Create new instance of ReservationCollection & set reservations
$reservationCollection = new \System\ReservationCollection\Collection();
$reservationCollection->add(\System\ReservationCollection\Reservation::getAll($db->getConnection()));

//Get formatted reservations objects & total
$reservations = $reservationCollection->get();
$totalReservations = $reservationCollection->getTotal();

//Default page title
$pageTitle = 'dashboard';

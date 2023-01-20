<?php
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Set form data
    $formData = new \System\Form\Data($_POST);

    //Override object with new variables
    /** @var Reservation $reservation */
    $reservation->date = $formData->getPostVar('date');
    $reservation->time = $formData->getPostVar('time');
    $reservation->barber = $formData->getPostVar('barber');
    $reservation->type = $formData->getPostVar('type');


    //Actual validation
    $validator = new \System\Form\Validation\ReservationValidator($reservation);
    $validator->validate();
    $errors = $validator->getErrors();
}

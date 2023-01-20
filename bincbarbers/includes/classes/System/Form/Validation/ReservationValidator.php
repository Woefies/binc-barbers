<?php namespace System\Form\Validation;

use System\ReservationCollection\Reservation;

/**
 * Class ReservationValidator
 * @package System\Form\Validation
 */
class ReservationValidator implements Validator
{
    private array $errors = [];

    /**
     * ReservationValidator constructor.
     *
     * @param Reservation $reservation
     */
    public function __construct(private readonly Reservation $reservation)
    {
    }

    /**
     * Validate the data
     */
    public function validate(): void
    {
        //Check if data is valid & generate error if not so
        if ($this->reservation->date == '') {
            $this->errors[] = 'Date cannot be empty';
        }
        if ($this->reservation->time == '') {
            $this->errors[] = 'Time cannot be empty';
        }
        if ($this->reservation->barber == '') {
            $this->errors[] = 'barber cannot be empty';
        }
        if ($this->reservation->type == '') {
            $this->errors[] = 'type cannot be empty';
        }

    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}

<?php namespace System\ReservationCollection;

/**
 * Class Collection
 * @package System\ReservationCollection
 */
class Collection
{
    private array $reservations = [];

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->reservations;
    }

    /**
     * @param array $reservations
     */
    public function add(array $reservations): void
    {
        $this->reservations = $reservations;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return count($this->reservations);
    }
} 

<?php

class Appointment {

    public DateTime $date;
    public string $appointmentType;
    private array $customers = [];


    /**
     * @return array
     */
    public function getCustomers(): array
    {
        return $this->customers;
    }

    /**
     * @param array $value
     * @return void
     */
    public function addCustomers(array $value): void
    {
        $this->customers[] = new Customer(
            $value['customerNumber'],
            $value['name'],
            $value['lastname'],
            $value['address']
        );
    }

}

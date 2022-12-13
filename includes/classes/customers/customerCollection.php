<?php namespace customers;

use customers\Customer;

class customerCollection
{
    private array $customers = [];

    /**
     * @return Customers[]
     */
    public function getCustomers(): array
    {
        return $this->customers;
    }
    /**
     * Retrieve raw array value & pass to Student object
     *
     * @param Customers[] $customers
     * @throws \Exception
     */
    public function setCustomers(array $customers): void
    {
        $this->customers = $customers;


    }

    /**
     * @return int
     */
    public function getTotalCustomers(): int
    {
        return count($this->customers);
    }

}
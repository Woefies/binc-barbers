<?php namespace System\customerCollection;

/**
 * Class Collection
 * @package System\customerCollection
 */
class Collection
{
    private array $customers = [];

    /**
     * @return mixed
     */
    public function get(): array
    {
        return $this->customers;
    }

    /**
     * @param Customer[] $customers
     */
    public function set(array $customers): void
    {
        $this->customers = $customers;
    }


    /**
     * @param Customer $customer
     */
    public function add(Customer $customer): void
    {
        $this->customers[] = $customer;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return count($this->customers);
    }
} 

<?php

class Customer
{
    /**
     * @param string $customerNumber
     * @param string $name
     * @param string $lastname
     * @param string $address
     */
    public function __construct(
        public string $customerNumber,
        public string $name,
        public string $lastname,
        public string $address
    )
    {
    }
}
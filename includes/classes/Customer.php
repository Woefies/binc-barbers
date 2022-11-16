<?php

class Customer
{
    /**
     * @param string $CustomerNumber
     * @param string $name
     * @param string $lastname
     * @param string $address
     */
    public function __construct(
        public string $CustomerNumber,
        public string $name,
        public string $lastname,
        public string $address,

    )
    {
    }
}
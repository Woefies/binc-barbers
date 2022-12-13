<?php namespace System\Form\Validation;

use System\customerCollection\Customer;

/**
 * Class CustomerValidator
 * @package System\Form\Validation
 */
class CustomerValidator implements Validator
{
    private array $errors = [];

    /**
     * CustomerValidator constructor.
     *
     * @param Customer $customer
     */
    public function __construct(private readonly Customer $customer)
    {
    }

    /**
     * Validate the data
     */
    public function validate(): void
    {
        //Check if data is valid & generate error if not so
        if ($this->customer->name == '') {
            $this->errors[] = 'Customer cannot be empty';
        }
        if ($this->customer->lastname == '') {
            $this->errors[] = 'lastname cannot be empty';
        }
        if ($this->customer->email == '') {
            $this->errors[] = 'email cannot be empty';
        }
        if ($this->customer->password == '') {
            $this->errors[] = 'password cannot be empty';
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

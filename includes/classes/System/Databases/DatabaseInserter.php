<?php namespace System\Databases;

use System\customerCollection\Customer;

/**
 * Class DatabaseInserter
 * @package System\Databases
 */
class DatabaseInserter extends Database
{
    /**
     * Save a album to the database
     *
     * @param Customer $customer
     * @return bool
     */
    public function addCustomer(Customer $customer): bool
    {
        $query = 'INSERT INTO customers (name, lastname, email, password)
                  VALUES (:name, :lastname, :email, :password)';
        $statement = $this->connection->prepare($query);
        return $statement->execute([
            ':name' => $customer->name,
            ':lastname' => $customer->lastname,
            ':email' => $customer->email,
            ':password' => $customer->password

        ]);
    }
}

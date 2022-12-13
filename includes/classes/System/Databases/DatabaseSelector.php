<?php namespace System\Databases;

use System\customerCollection\Customer;

/**
 * Class DatabaseSelector
 * @package System\Databases
 */
class DatabaseSelector extends Database
{
    /**
     * Get all albums from the database
     *
     * @return array
     */
    public function getCustomers(): array
    {
        return $this->connection->query('SELECT * FROM customers')->fetchAll(\PDO::FETCH_CLASS, '\\System\\customerCollection\\Customer');
    }

    /**
     * Get a specific album by its ID
     *
     * @param $id
     * @return Customer
     * @throws \Exception
     */
    public function getCustomerById(int $id): Customer
    {
        $statement = $this->connection->prepare('SELECT * FROM customers WHERE id = :id');
        $statement->execute([':id' => $id]);

        if (($customer = $statement->fetchObject('\\System\\customerCollection\\Customer')) === false) {
            throw new \Exception('ID is not available in the database');
        }

        return $customer;
    }
}

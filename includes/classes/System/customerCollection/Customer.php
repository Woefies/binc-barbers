<?php namespace System\customerCollection;

/**
 * Class Customer
 * @package System\customerCollection
 */
class Customer
{
    public int $id;
    public string $name = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';

    /**
     * @param \PDO $db
     * @return bool
     */
    public function update(\PDO $db): bool
    {
        $query = 'UPDATE customers
                  SET name = :name, lastname = :lastname, email = :email, password = :password 
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':name' => $this->name,
            ':lastname' => $this->lastname,
            ':email' => $this->email,
            ':password' => $this->password,
            ':id' => $this->id
        ]);
    }

    /**
     * @param \PDO $db
     * @return bool
     */
    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM customers
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }
}

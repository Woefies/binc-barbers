<?php namespace System\ReservationCollection;

/**
 * Class Reservation
 * @package System\ReservationCollection
 */
class Reservation
{
    public int $id;
    public string $date = '';
    public string $time = '';
    public string $barber = '';
    public string $type = '';


    /**
     * @param \PDO $db
     * @return bool
     */
    public function update(\PDO $db): bool
    {
        $query = 'UPDATE reservations
                  SET date = :date, time = :time, barber = :barber, type = :type
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':date' => $this->date,
            ':time' => $this->time,
            ':barber' => $this->barber,
            ':type' => $this->type,
            ':id' => $this->id
        ]);
    }

    /**
     * @param \PDO $db
     * @return bool
     */
    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM reservations
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }

    /**
     * Save a reservation to the database
     *
     * @param Reservation $reservation
     * @param \PDO $db
     * @return bool
     */
    public static function create(Reservation $reservation, \PDO $db): bool
    {
        $query = 'INSERT INTO reservations (date, time, barber, type)
                  VALUES (:date, :time, :barber, :type)';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':date' => $reservation->date,
            ':time' => $reservation->time,
            ':barber' => $reservation->barber,
            ':type' => $reservation->type

        ]);
    }

    /**
     * Get all reservations from the database
     *
     * @param \PDO $db
     * @return Reservation[]
     */
    public static function getAll(\PDO $db): array
    {
        return $db->query('SELECT * FROM reservations')->fetchAll(\PDO::FETCH_CLASS, '\\System\\reservationCollection\\Reservation');
    }

    /**
     * Get a specific reservation by its ID
     *
     * @param int $id
     * @param \PDO $db
     * @return Reservation
     * @throws \Exception
     */
    public static function getById(int $id, \PDO $db): Reservation
    {
        $statement = $db->prepare('SELECT * FROM reservations WHERE id = :id');
        $statement->execute([':id' => $id]);

        if (($reservation = $statement->fetchObject('\\System\\ReservationCollection\\Reservation')) === false) {
            throw new \Exception('Reservation ID is not available in the database');
        }

        return $reservation;
    }
}

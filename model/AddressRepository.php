<?php
declare(strict_types=1);

namespace model;

/**
 *
 */
final class AddressRepository
{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function insert(array $array): bool
    {
        $statement = $this->connection->prepare(
            "INSERT INTO city (cityName, state) VALUES (?, ?)"
        );
        $statement->bindParam(1, $array["name"]);
        $statement->bindParam(2, $array["state"]);

        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare(
            "SELECT * FROM city"
        );
        $statement->execute();

        return $statement->fetchAll();
    }
}
<?php
declare(strict_types=1);

namespace App\model;

use PDO;

/**
 *
 */
final class AddressRepository
{

    private PDO $connection;

    public function __construct(PDO $connection)
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

    public function update(array $array): bool
    {
        $statement = $this->connection->prepare(
            "INSERT INTO district(districtName, cityName) VALUES (?, ?)"
        );
        $statement->bindParam(1, $array["name"]);
        $statement->bindParam(2, $array["cityName"]);

        return $statement->execute();
    }

    public function delete(): array
    {
        $statement = $this->connection->prepare(
            "SELECT * FROM district"
        );
        $statement->execute();

        return $statement->fetchAll();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare(
            "SELECT * FROM city"
        );
        $statement->execute();

        return $statement->fetchAll();
    }

    public function findByID()
    {

    }
}
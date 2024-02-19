<?php
declare(strict_types=1);

namespace App\model\repository;

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
            // (employeeID, uf, city, district, street, number, cep, complement)
            <<<SQL
                INSERT INTO
                    address
                VALUES
                    (?, ?, ?, ?, ?, ?, ?, ?)
            SQL
        );
        $statement->bindParam(1, $array["name"]);
        $statement->bindParam(2, $array["state"]);

        return $statement->execute();
    }

    public function update(array $array): bool
    {
        $statement = $this->connection->prepare(
            <<<SQL
                UPDATE
                    address
                SET
                    uf = ?, city = ?, district = ?, street = ?, number = ?, cep = ?, complement = ?
                WHERE
                    employeeID = ?
            SQL
        );
        $statement->bindParam(1, $array["name"]);
        $statement->bindParam(2, $array["cityName"]);

        return $statement->execute();
    }

    public function delete(): array
    {
        $statement = $this->connection->prepare(
            <<<SQL
                DELETE FROM
                    address
                WHERE
                    employeeID = ?
            SQL
        );
        $statement->execute();

        return $statement->fetchAll();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare(
            <<<SQL
                SELECT
                    employeeID, uf, city, district, street, number, cep, complement
                FROM
                    address
            SQL
        );
        $statement->execute();

        return $statement->fetchAll();
    }

    public function findByID()
    {

    }
}
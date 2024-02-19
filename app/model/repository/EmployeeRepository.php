<?php
declare(strict_types=1);

namespace App\model\repository;

use PDO;

/**
 *
 */
final class EmployeeRepository
{

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function insert(array $array): bool
    {
        $statement = $this->connection->prepare(
            // employee (CPF, name, surname, age, sons, contract)
            <<<SQL
                INSERT INTO
                    employee
                VALUES
                    (?, ?, ?, ?, ?, ?)
            SQL
        );
        $statement->bindParam(1, $array["name"]);
        $statement->bindParam(2, $array["registration"]);
        $statement->bindParam(3, $array["admission"]);
        $statement->bindParam(4, $array["wage"]);
        $statement->bindParam(5, $array["sons"]);
        $statement->bindParam(6, $array["office"]);

        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare(
            <<<SQL
                SELECT
                    CPF, name, surname, age, sons, contract
                FROM
                    employee
            SQL
        );
        $statement->execute();

        return $statement->fetchAll();
    }
}
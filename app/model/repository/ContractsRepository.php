<?php
declare(strict_types=1);

namespace App\model;

use PDO;

/**
 *
 */
final class ContractsRepository
{

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function insert(array $array): bool
    {
        $statement = $this->connection->prepare(
            // contract (registration, admission, wage, office)
            <<<SQL
                INSERT INTO
                    contract
                VALUES
                    (?, ?, ?, ?)
            SQL
        );
        $statement->bindParam(1, $array["nome"]);
        $statement->bindParam(2, $array["sobrenome"]);
        $statement->bindParam(3, $array["idade"]);
        $statement->bindParam(4, $array["filhos"]);

        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare(
            <<<SQL
                SELECT
                    ID, registration, admission, wage, office
                FROM
                    contract
            SQL
        );
        $statement->execute();

        return $statement->fetchAll();
    }
}
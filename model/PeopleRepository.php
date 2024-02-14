<?php
namespace model;

use PDO;

/**
 *
 */
class PeopleRepository
{

    private PDO $connection;

    function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function insert(array $array): bool
    {
        $statement = $this->connection->prepare(
            <<<SQL
                INSERT INTO
                    people(firstName, lastName, age, childs)
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
            "SELECT * FROM people"
        );
        $statement->execute();

        return $statement->fetchAll();
    }
}
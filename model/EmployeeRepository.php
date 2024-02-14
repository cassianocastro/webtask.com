<?php
namespace model;

/**
 *
 */
class EmployeeRepository implements IDAO
{

    private $connection;

    function __construct(DataBaseConnection $connection)
    {
        $this->connection = $connection;
    }

    public function insert(array $array): bool
    {
        $statement = $this->connection->prepare(
            <<<SQL
                INSERT INTO
                    employee(completeName, registration, admission, wage, childs, office)
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
            "SELECT * FROM employee"
        );
        $statement->execute();

        return $statement->fetchAll();
    }
}
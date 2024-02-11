<?php
namespace model;

/**
 *
 */
class CityDAO implements IDAO
{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function insert(array $array): bool
    {
        $statement = $this->connection->prepare(
            "insert into city (cityName, state) values (?, ?)"
        );
        $statement->bindParam(1, $array["name"]);
        $statement->bindParam(2, $array["state"]);

        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare("select * from city");
        $statement->execute();

        return $statement->fetchAll();
    }
}
<?php
namespace model;

/**
 *
 */
class DistrictDAO implements IDAO
{

    private $connection;

    public function __construct(DataBaseConnection $connection)
    {
        $this->connection = $connection;
    }

    public function insert(array $array): bool
    {
        $statement = $this->connection->prepare(
            "INSERT INTO district(districtName, cityName) VALUES (?, ?)"
        );
        $statement->bindParam(1, $array["name"]);
        $statement->bindParam(2, $array["cityName"]);

        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare(
            "SELECT * FROM district"
        );
        $statement->execute();

        return $statement->fetchAll();
    }
}
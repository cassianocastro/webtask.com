<?php
namespace Model;
use Model\{
    IDAO,
    ConnectionSingleton as Connection
};

require_once 'ConnectionSingleton.php';
require_once 'IDAO.php';

/**
 *
 */
class CityDAO implements IDAO
{

    private $connection;

    function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function insert(array $city): bool
    {
        $statement = $this->connection->prepare("insert into city (cityName, state) values (?, ?)");
        $statement->bindParam(1, $city["name"]);
        $statement->bindParam(2, $city["state"]);
        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare("select * from city");
        $statement->execute();
        return $statement->fetchAll();
    }
}

?>

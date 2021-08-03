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
class DistrictDAO implements IDAO
{

    private $connection;

    function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function insert(array $district): bool
    {
        $statement = $this->connection->prepare("insert into district (districtName, cityName) values (?, ?)");
        $statement->bindParam(1, $district["name"]);
        $statement->bindParam(2, $district["cityName"]);
        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare("select * from district");
        $statement->execute();
        return $statement->fetchAll();
    }
}

?>

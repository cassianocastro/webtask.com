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
        return mysqli_query(
            $this->connection,
            "insert into city (cityName, state) values ('$city[name]', '$city[state]')"
        );
    }

    public function getAll()
    {
        return mysqli_query(
            $this->connection,
            "select * from city"
        );
    }
}

?>

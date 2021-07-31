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
        return mysqli_query(
            $this->connection,
            "insert into district (districtName, cityName) "
            . "values ('$district[name]', '$district[cityName]')"
        );
    }

    public function getAll()
    {
        return mysqli_query(
            $this->connection,
            "select * from district"
        );
    }
}

?>

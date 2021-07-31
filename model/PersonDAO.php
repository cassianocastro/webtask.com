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
class PersonDAO implements IDAO
{

    private $connection;

    function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function insert(array $person): bool
    {
        return mysqli_query(
            $this->connection,
            "insert into people (firstName, lastName, age, childs) " .
            "values (
                '$person[nome]',
                '$person[sobrenome]',
                '$person[idade]',
                '$person[filhos]'
            )"
        );
    }

    public function getAll()
    {
        return mysqli_query($this->connection, "select * from people");
    }
}


?>

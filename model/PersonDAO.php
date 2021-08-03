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
        $statement = $this->connection->prepare(
            "insert into people (firstName, lastName, age, childs)"
            . " values (?, ?, ?, ?)"
        );
        $statement->bindParam(1, $person["nome"]);
        $statement->bindParam(2, $person["sobrenome"]);
        $statement->bindParam(3, $person["idade"]);
        $statement->bindParam(4, $person["filhos"]);
        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare("select * from people");
        $statement->execute();
        return $statement->fetchAll();
    }
}

?>

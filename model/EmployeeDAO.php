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
class EmployeeDAO implements IDAO
{

    private $connection;

    function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function insert(array $employee): bool
    {
        $statement = $this->connection->prepare(
            "insert into"
            . " employee (completeName, registration, admission, wage, childs, office)"
            . " values (?, ?, ?, ?, ?, ?)"
        );
        $statement->bindParam(1, $employee["name"]);
        $statement->bindParam(2, $employee["registration"]);
        $statement->bindParam(3, $employee["admission"]);
        $statement->bindParam(4, $employee["wage"]);
        $statement->bindParam(5, $employee["sons"]);
        $statement->bindParam(6, $employee["office"]);
        return $statement->execute();
    }

    public function getAll(): array
    {
        $statement = $this->connection->prepare("select * from employee");
        $statement->execute();
        return $statement->fetchAll();
    }
}

?>

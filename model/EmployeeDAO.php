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
        return mysqli_query(
            $this->connection,
            "insert into employee (completeName, registration, admission, wage, childs, office) "
            . "values (
                '$employee[name]',
                '$employee[registration]',
                '$employee[admission]',
                '$employee[wage]',
                '$employee[sons]',
                '$employee[office]'
            )"
        );
    }

    public function getAll()
    {
        return mysqli_query($this->connection, "select * from employee");
    }
}

?>

<?php
declare(strict_types=1);

namespace controller;

use model\EmployeeDAO;

/**
 *
 */
final class EmployeesController
{

    public function addEmployee(): void
    {
        $employee         = $_POST["employee"];
        $employee["wage"] = parser($employee["wage"]);
        $employeeDAO      = new EmployeeDAO();
        $wasInserted      = $employeeDAO->insert($employee);
        $resultSet        = $employeeDAO->getAll();

        $caption = "Funcionários cadastrados";
        $columns = array(
            "employeeID",
            "completeName",
            "registration",
            "admission",
            "wage",
            "childs",
            "office"
        );

        //"R$ " . number_format($register["wage"], 2, ",", ".")
        echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";

        include_once '../view/templates/result.php';
    }
}

function parser($value)
{
    return floatval($value);
}
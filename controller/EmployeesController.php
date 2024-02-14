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
        $employee["wage"] = floatval($employee["wage"]);

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

    public function updateEmployee(): void
    {
        // code ...
    }

    public function deleteEmployee(): void
    {
        // code ...
    }

    public function showEmployees(): void
    {
        // code ...
    }
}
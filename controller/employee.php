<?php
namespace controller;

use Model\EmployeeDAO;

require_once '../model/EmployeeDAO.php';

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

function parser($value)
{
    return floatval($value);
}

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

include_once '../view/html/result.php';
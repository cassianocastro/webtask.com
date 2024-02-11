<?php
namespace controller;

use Model\PersonDAO;

require_once '../model/PersonDAO.php';

$person      = $_POST["person"];
$personDAO   = new PersonDAO();
$wasInserted = $personDAO->insert($person);
$resultSet   = $personDAO->getAll();

$caption = "People";
$columns = array(
    "personID",
    "firstName",
    "lastName",
    "age",
    "childs"
);

echo ( $wasInserted ) ? "Registro inserido." : "Não foi possível inserir.";

include_once '../view/html/result.php';
<?php
declare(strict_types=1);

namespace controller;

use model\PersonDAO;

/**
 *
 */
final class PeopleController
{

    public function addPerson(): void
    {
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

        include_once '../view/templates/result.php';
    }
}
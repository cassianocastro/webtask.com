<?php
declare(strict_types=1);

namespace controller;

use model\PeopleRepository;

/**
 *
 */
final class PeopleController
{

    public function addPerson(): void
    {
        $person      = $_POST["person"];
        $personDAO   = new PeopleRepository();
        $wasInserted = $personDAO->insert($person);
        $resultSet   = $personDAO->getAll();

        $caption = "People";
        $columns = [
            "personID",
            "firstName",
            "lastName",
            "age",
            "childs"
        ];

        echo ( $wasInserted ) ? "Registro inserido." : "Não foi possível inserir.";

        include_once '../view/templates/result.php';
    }
}
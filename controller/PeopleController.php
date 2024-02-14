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
        $person     = $_POST["person"];
        $repository = new PeopleRepository();
        $inserted   = $repository->insert($person);
        $resultSet  = $repository->getAll();

        $caption = "People";
        $columns = [
            "personID",
            "firstName",
            "lastName",
            "age",
            "childs"
        ];

        echo ( $inserted ) ? "Registro inserido." : "Não foi possível inserir.";

        require_once __DIR__ . '/../view/templates/result.php';
    }
}
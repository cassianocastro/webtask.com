<?php
declare(strict_types=1);

namespace App\controller;

use App\view\View;

/**
 *
 */
final class HomeController
{

    public function showHomepage(): void
    {
        $employees = [
            "João da Silva",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro",
            "João da Silva Sauro"
        ];

        (new View())->render("home/index.twig", ["employees" => $employees]);
    }
}
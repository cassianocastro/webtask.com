<?php
declare(strict_types=1);

namespace controller;

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
            "João da Silva Sauro"
        ];

        require_once __DIR__ . '/../view/templates/home/index.php';
    }
}
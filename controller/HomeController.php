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
        require_once __DIR__ . '/../view/templates/home/index.php';
    }
}
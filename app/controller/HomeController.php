<?php
declare(strict_types=1);

namespace App\controller;

use App\model\{ ConnectionFactory, DBConfig };
use App\model\repository\EmployeeRepository;
use App\view\View;

/**
 *
 */
final class HomeController
{

    public function showHomepage(): void
    {
        $config     = new DBConfig("localhost", "mysql", "webtask", "php", "php", 3306);
        $connection = (new ConnectionFactory())->create($config);
        $employees  = (new EmployeeRepository($connection))->getAll();

        (new View())->render("home/index.twig", ["employees" => $employees]);
    }
}
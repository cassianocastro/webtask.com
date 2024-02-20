<?php
declare(strict_types=1);

namespace App\controller;

use App\model\ApiClient;
use App\view\View;

/**
 *
 */
final class HomeController
{

    public function showHomepage(): void
    {
        $data = (new ApiClient())->getResource("/employees");

        (new View())->render("home/index.twig", ["employees" => $data]);
    }
}
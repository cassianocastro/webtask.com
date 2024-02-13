<?php
require_once __DIR__ . '/lib/autoload.php';

ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

/**
 *
 */
function index(): void
{
    // $city = [ "name" => "Quintão", "state" => "RS" ];

    // (new controller\CitiesController())->addCity($city);

    require_once __DIR__ . '/view/templates/home/index.php';
}

index();
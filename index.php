<?php
require_once __DIR__ . '/lib/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$city = [ "name" => "Quintão", "state" => "RS" ];

(new controller\CitiesController())->addCity($city);

//require_once "view/html/home.php";
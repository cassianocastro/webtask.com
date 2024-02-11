<?php
require_once __DIR__ . '/lib/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use controller\CitiesController;
use view\CityView;
use model\{ DataBaseConfig, DataBaseConnection, CityDAO };

$config   = new DataBaseConfig("localhost", "mysql", "webTask", "php", "php", 3306);
$connection = (new DataBaseConnection($config))->getConnection();

$cityDAO        = new CityDAO($connection);
$cityView       = new CityView();
$cityController = new CitiesController($cityDAO, $cityView);

$city        = $_POST["city"];
$wasInserted = $cityController->addCity($city);

if ( $wasInserted )
{
    //echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";
    $cityController->showCities();
}

//require_once "view/html/home.php";
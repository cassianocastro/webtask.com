<?php
use controll\CityController;
use view\CityView;
use model\{
    DataBaseConfig,
    DataBaseConnection,
    CityDAO
};

require_once 'lib/Loader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbConfig   = new DataBaseConfig("localhost", "mysql", "webTask", "root", "", 3306);
$connection = (new DataBaseConnection($dbConfig))->getConnection();

$cityDAO         = new CityDAO($connection);
$cityView        = new CityView();
$cityController  = new CityController($cityDAO, $cityView);


$city        = $_POST["city"];
$wasInserted = $cityController->registerCity($city);

if ($wasInserted) {
    //echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";
    $cityController->showResult();
}
// $districDAO  = new DistrictDAO($connection);
// $personDAO   = new PersonDAO($connection);
// $employeeDAO = new EmployeeDAO($connection);


//require_once "view/html/home.php";


?>

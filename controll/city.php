<?php
namespace Controller;
use Model\CityDAO;

require_once '../model/CityDAO.php';

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

$city        = $_POST["city"];

$cityDAO     = new CityDAO();
$wasInserted = $cityDAO->insert($city);
$query       = $cityDAO->getAll();

$caption     = "Cidades cadastradas";
$columns     = array("cityID", "cityName", "state");

echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";

include_once '../view/html/result.php';

?>

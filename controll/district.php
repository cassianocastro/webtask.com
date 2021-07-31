<?php
namespace Controller;
use Model\DistrictDAO;

require_once '../model/DistrictDAO.php';

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

$district    = $_POST["district"];

$districtDAO = new DistrictDAO();
$wasInserted = $districtDAO->insert($district);
$query       = $districtDAO->getAll();

$caption = "Bairros cadastrados";
$columns = array("districtID", "districtName", "cityName");

echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";

include_once '../view/html/result.php';

?>

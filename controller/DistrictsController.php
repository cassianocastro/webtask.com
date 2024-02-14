<?php
namespace controller;

use Model\DistrictDAO;

require_once '../model/DistrictDAO.php';

$district    = $_POST["district"];

$districtDAO = new DistrictDAO();
$wasInserted = $districtDAO->insert($district);
$resultSet   = $districtDAO->getAll();

$caption = "Bairros cadastrados";
$columns = array("districtID", "districtName", "cityName");

echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";

include_once '../view/templates/result.php';
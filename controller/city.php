<?php
namespace controller;

$city        = $_POST["city"];

$cityDAO     = new CityDAO($connection);
$wasInserted = $cityDAO->insert($city);
$resultSet   = $cityDAO->getAll();

$caption     = "Cidades cadastradas";
$columns     = array("cityID", "cityName", "state");

include_once '../view/html/result.php';
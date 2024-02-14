<?php
declare(strict_types=1);

namespace controller;

use model\DistrictDAO;

/**
 *
 */
final class DistrictsController
{

    public function addDistrict(): void
    {
        $district    = $_POST["district"];
        $districtDAO = new DistrictDAO();
        $wasInserted = $districtDAO->insert($district);
        $resultSet   = $districtDAO->getAll();

        $caption = "Bairros cadastrados";
        $columns = array("districtID", "districtName", "cityName");

        echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";

        include_once '../view/templates/result.php';
    }
}
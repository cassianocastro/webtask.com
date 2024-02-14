<?php
declare(strict_types=1);

namespace controller;

use model\{ DataBaseConfig, DataBaseConnection, CityDAO, Table };
use view\CityView;

/**
 *
 */
final class AddressesController
{

    public function addAddress(array $city): void
    {
        $config     = new DataBaseConfig("localhost", "mysql", "webTask", "php", "php", 3306);
        $connection = (new DataBaseConnection($config))->getConnection();
        $inserted   = (new CityDAO($connection))->insert($city);

        if ( $inserted )
        {
            // echo ( $inserted ) ? "Registro inserido." : "Não foi possivel inserir.";

            $this->showAddresses();
        }
    }

    public function updateAddress(): void
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

    public function showAddresses(): void
    {
        $config     = new DataBaseConfig("localhost", "mysql", "webTask", "php", "php", 3306);
        $connection = (new DataBaseConnection($config))->getConnection();
        $resultSet  = (new CityDAO($connection))->getAll();

        (new CityView())->render(
            new Table(
                "Cidades cadastradas",
                [ "cityID", "cityName", "state" ],
                $resultSet
            )
        );
    }
}
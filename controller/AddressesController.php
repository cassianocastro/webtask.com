<?php
declare(strict_types=1);

namespace controller;

use model\{ DBConfig, ConnectionFactory, AddressRepository, Table };
use view\CityView;

/**
 *
 */
final class AddressesController
{

    public function addAddress(array $city): void
    {
        $config     = new DBConfig("localhost", "mysql", "webTask", "php", "php", 3306);
        $connection = (new ConnectionFactory())->create($config);
        $inserted   = (new AddressRepository($connection))->insert($city);

        if ( $inserted )
        {
            // echo ( $inserted ) ? "Registro inserido." : "Não foi possivel inserir.";

            $this->showAddresses();
        }
    }

    public function updateAddress(): void
    {
        $district    = $_POST["district"];
        // $districtDAO = new DistrictDAO();
        // $wasInserted = $districtDAO->insert($district);
        // $resultSet   = $districtDAO->getAll();

        $caption = "Bairros cadastrados";
        $columns = array("districtID", "districtName", "cityName");

        // echo ( $wasInserted ) ? "Registro inserido." : "Não foi possivel inserir.";

        include_once '../view/templates/result.php';
    }

    public function showAddresses(): void
    {
        $config     = new DBConfig("localhost", "mysql", "webTask", "php", "php", 3306);
        $connection = (new ConnectionFactory())->create($config);
        $resultSet  = (new AddressRepository($connection))->getAll();

        (new CityView())->render(
            new Table(
                "Cidades cadastradas",
                [ "cityID", "cityName", "state" ],
                $resultSet
            )
        );
    }
}
<?php
declare(strict_types=1);

namespace App\controller;

use App\model\{ DBConfig, ConnectionFactory, AddressRepository };
use App\view\View;

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
        $district   = $_POST["district"];
        // $repository = new DistrictDAO();
        // $inserted   = $repository->insert($district);
        // $resultSet  = $repository->getAll();

        $caption = "Bairros cadastrados";
        $columns = [ "districtID", "districtName", "cityName" ];

        // echo ( $inserted ) ? "Registro inserido." : "Não foi possivel inserir.";

        require_once __DIR__ . '/../view/templates/result.php';
    }

    public function showAddresses(): void
    {
        $config     = new DBConfig("localhost", "mysql", "webTask", "php", "php", 3306);
        $connection = (new ConnectionFactory())->create($config);
        $resultSet  = (new AddressRepository($connection))->getAll();

        // (new View())->render();
    }
}
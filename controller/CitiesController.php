<?php
namespace controller;

use model\{ IDAO, Table };

/**
 *
 */
class CitiesController
{

    private IDAO $cityDAO;
    private $cityView;

    function __construct(IDAO $cityDAO, $cityView)
    {
        $this->cityDAO  = $cityDAO;
        $this->cityView = $cityView;
    }

    public function addCity(array $city): bool
    {
        $result = $this->cityDAO->insert($city);

        return $result;
    }

    public function showCities()
    {
        $caption   = "Cidades cadastradas";
        $columns   = array("cityID", "cityName", "state");
        $resultSet = $this->cityDAO->getAll();

        $this->cityView->render(new Table($caption, $columns, $resultSet));
    }
}
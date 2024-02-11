<?php
namespace view;

use model\Table;

/**
 *
 */
class CityView
{

    public function render(Table $table)
    {
        $caption   = $table->getCaption();
        $columns   = $table->getColumns();
        $resultSet = $table->getData();

        require_once 'html/result.php';
    }
}
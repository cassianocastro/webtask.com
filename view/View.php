<?php
declare(strict_types=1);

namespace view;

use model\Table;

/**
 *
 */
final class View
{

    public function render(Table $table): void
    {
        $caption   = $table->getCaption();
        $columns   = $table->getColumns();
        $resultSet = $table->getData();

        require_once 'templates/result.php';
    }
}
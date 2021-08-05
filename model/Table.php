<?php
namespace model;

/**
 *
 */
class Table
{

    private string $caption;
    private array $columns;
    private array $data;

    function __construct(string $caption, array $columns, array $data)
    {
        $this->caption = $caption;
        $this->columns = $columns;
        $this->data    = $data;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function getData(): array
    {
        return $this->data;
    }
}

?>

<?php
namespace Model;
/**
 *
 */
interface IDAO
{

    public function insert(array $array): bool;

    public function getAll(): array;

}

?>

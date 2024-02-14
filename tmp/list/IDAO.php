<?php
namespace model;

/**
 *
 */
interface IDAO
{

    public function insert(array $array): bool;

    public function getAll(): array;
}
<?php
namespace controll;

/**
 *
 */
class Context
{

    private IDAO $dao;

    public function setStrategy(IDAO $dao): void
    {
        $this->dao = $dao;
    }

    public function insert(array $array): bool
    {
        $result = $this->dao->insert($array);
        return $result;
    }

    public function getAll(): array
    {
        return $this->dao->getAll();
    }
}

?>

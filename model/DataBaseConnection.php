<?php
namespace model;
use \PDO;
/**
 *
 */
class DataBaseConnection
{
    private DataBaseConfig $config;

    public function __construct(DataBaseConfig $config)
    {
        $this->config = $config;
    }

    public function getConnection()
    {
        try {
            return new PDO(
                $this->config->getDataBank()   . ":host="  .
                $this->config->getHost() . ";" . "dbname=" .
                $this->config->getDataBase(),
                $this->config->getUserName(),
                $this->config->getPassword(),
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
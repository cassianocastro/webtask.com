<?php
declare(strict_types=1);

namespace model;

use PDO, PDOException;

/**
 *
 */
final class ConnectionFactory
{

    private DataBaseConfig $config;

    public function __construct(DataBaseConfig $config)
    {
        $this->config = $config;
    }

    public function create(): PDO
    {
        try
        {
            return new PDO(
                $this->config->getDataBank()   . ":host="  .
                $this->config->getHost() . ";" . "dbname=" .
                $this->config->getDataBase(),
                $this->config->getUserName(),
                $this->config->getPassword(),
            );
        }
        catch ( PDOException $e )
        {
            die($e->getMessage());
        }
    }
}
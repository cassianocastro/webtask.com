<?php
declare(strict_types=1);

namespace model;

use PDO, PDOException;

/**
 *
 */
final class ConnectionFactory
{

    private DBConfig $config;

    public function __construct(DBConfig $config)
    {
        $this->config = $config;
    }

    public function create(): PDO
    {
        try
        {
            return new PDO(
                $this->config->getDriver() . ":host=" .
                $this->config->getHost() . ";" . "dbname=" .
                $this->config->getDatabase(),
                $this->config->getUsername(),
                $this->config->getPassword(),
            );
        }
        catch ( PDOException $e )
        {
            die($e->getMessage());
        }
    }
}
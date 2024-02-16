<?php
declare(strict_types=1);

namespace model;

use PDO, PDOException;

/**
 *
 */
final class ConnectionFactory
{

    public function create(DBConfig $config): PDO
    {
        try
        {
            return new PDO(
                $config->getDriver() . ":host=" .
                $config->getHost() . ";" . "dbname=" .
                $config->getDatabase(),
                $config->getUsername(),
                $config->getPassword(),
            );
        }
        catch ( PDOException $e )
        {
            die($e->getMessage());
        }
    }
}
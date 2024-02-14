<?php
declare(strict_types=1);

namespace model;

/**
 *
 */
final class DBConfig
{

    private string $host;
    private string $driver;
    private string $dbname;
    private string $user;
    private string $password;
    private int $port;

    public function __construct(string $host, string $driver, string $dbname, string $user, string $password, int $port)
    {
        $this->host     = $host;
        $this->driver   = $driver;
        $this->dbname   = $dbname;
        $this->user     = $user;
        $this->password = $password;
        $this->port     = $port;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getDataBank(): string
    {
        return $this->driver;
    }

    public function getDataBase(): string
    {
        return $this->dbname;
    }

    public function getUserName(): string
    {
        return $this->user;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getPort(): int
    {
        return $this->port;
    }
}
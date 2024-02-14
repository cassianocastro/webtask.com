<?php
namespace model;

/**
 *
 */
final class DBConfig
{

    private string $host;
    private string $dataBank;
    private string $dataBase;
    private string $userName;
    private string $password;
    private int $port;

    function __construct(
        string $host, string $dataBank, string $dataBase, string $userName, string $password, int $port
    )
    {
        $this->host     = $host;
        $this->dataBank = $dataBank;
        $this->dataBase = $dataBase;
        $this->userName = $userName;
        $this->password = $password;
        $this->port     = $port;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getDataBank(): string
    {
        return $this->dataBank;
    }

    public function getDataBase(): string
    {
        return $this->dataBase;
    }

    public function getUserName(): string
    {
        return $this->userName;
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
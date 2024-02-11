<?php
namespace lib;

/**
 *
 */
class ConnectionSingleton
{

    private static $instance;

    private function __construct() {}

    private function __clone() {}

	public function __wakeup()
    {
		throw new Exception("Cannot unserialize Singleton");
	}

    public static function getInstance()
    {
        if ( static::$instance === null )
        {
            try
            {
                static::$instance = new \PDO(
                    "mysql:host=localhost;dbname=webTask",
                    "root",
                    ""
                );
            }
            catch ( \PDOException $e )
            {
                die("Error: " . $e->getMessage());
            }
        }

        return static::$instance;
    }
}
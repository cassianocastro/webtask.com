<?php
namespace Model;
/**
 *
 */
class ConnectionSingleton
{
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = mysqli_connect("localhost", "root", "", "webTask");
        }
        return self::$instance;
    }
}

?>

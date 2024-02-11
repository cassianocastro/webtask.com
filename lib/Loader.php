<?php
namespace lib;

spl_autoload_register(
    function($className)
    {
        $file = str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
        if ( ! file_exists($file)) {
            echo "--------ERROR: O seguinte arquivo não existe ou não foi encontrado:\n$file";
        }
        require $file;
    }
);
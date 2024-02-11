<?php
declare(strict_types=1);

spl_autoload_register(
    function(string $className): void
    {
        $file = str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";

        if ( ! file_exists($file) )
        {
            echo "ERROR: O seguinte arquivo não existe ou não foi encontrado:\n$file";
        }

        require_once $file;
    }
);
<?php
require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

/**
 *
 */
function index(): void
{
    (new controller\HomeController())->showHomepage();
}

index();
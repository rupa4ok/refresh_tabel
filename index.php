<?php

use App\Models\Connect;
use App\Router\Router;

$dir = __DIR__ . '/app/';
define('ROOT', dirname($dir));
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

$db = new Connect();
$router = new Router();
echo $router->run();
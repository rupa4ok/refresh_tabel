<?php
use App\Router\Router;

$dir = __DIR__ . '/app/';
define('ROOT', dirname($dir));
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

$router = new Router();
echo $router->run();

$db = new \App\Models\Users();

print_r($db->create_user());
<?php


use components\Response;
use vendor\Router;

ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));


spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)){
        require $path;
    }
});


session_start();

$router = new Router();
require './config/routes.php';
ob_start();

$router->dispatch();
$content =  ob_get_clean();

$response = new Response($content);

$response->send();



<?php


use components\Router;
use components\Response;
ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));


spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)){
        require $path;
    }
});





$router = new Router();
ob_start();

  $response = $router->run();
 $text =  ob_get_clean();

$resp = new Response($text);

$resp->send();



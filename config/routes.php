<?php


use vendor\Router;

$router->map( 'GET', '/', 'HomeController#index');
$router->map('GET', '/news', 'NewsController#index', 'home');
$router->map('GET', '/news/[i:id]', 'NewsController#show');
$router->map('POST', '/news/[create:action]', 'NewsController#create');
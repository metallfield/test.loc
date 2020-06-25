<?php


use vendor\Router;

$router->map( 'GET', '/', 'HomeController#index');

$router->map('GET', '/news', 'NewsController#index', 'home');
$router->map('GET', '/news/[i:id]', 'NewsController#show');
$router->map('GET', '/news/create', 'NewsController#createPage');
$router->map('POST', '/news/[create:action]', 'NewsController#create');
$router->map('GET', '/news/[i:id]/[delete:action]', 'NewsController#delete');
$router->map('GET', '/news/[i:id]/edit', 'NewsController#editPage');
$router->map('POST', '/news/[i:id]/edit', 'NewsController#edit');

$router->map('GET', '/register', 'UserController#register');
$router->map('POST', '/register', 'UserController#register');
$router->map('GET', '/login', 'UserController#login');
$router->map('POST', '/login', 'UserController#login');
$router->map('GET', '/logout', 'UserController#logout');

$router->map('GET', '/account', 'UserController#account');
$router->map('GET', '/user/[i:id]/edit', 'UserController#edit');
$router->map('POST', '/user/[i:id]/edit', 'UserController#edit');

$router->map('GET', '/admin', 'AdminController#index');


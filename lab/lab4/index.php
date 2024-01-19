<?php
use Administrator\Lab4\core\Route;


$route = new Route;
$route->get('/', [app\Home::class, 'index']);
$route->post('/upload', [app\Home::class, 'upload']);

echo $route->register($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
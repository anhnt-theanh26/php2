<?php
require_once __DIR__ . "/vendor/autoload.php";
use Core\Database;
use Core\Form;
use Core\Field;
use Core\Route;





$router = new Route();

// $router->register('/', [app\Home::class, 'index'])
//     ->register('/invoices', [app\Invoices::class, 'index'])
//     ->register('/invoices/create', [app\Invoices::class, 'create']);

$router
    ->get("/", [app\Home::class, 'index'])
    ->post('/upload', [app\Home::class, 'upload'])
    ->get('/login', [app\Login::class, 'login'])
    ->post('/login', [app\Login::class, 'login'])
    ->get('/logout', [app\Login::class, 'logout']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

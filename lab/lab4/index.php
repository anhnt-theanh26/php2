<?php

use app\core\Route;

require_once __DIR__ . "/vendor/autoload.php";


$rouse = new Route();

$rouse
    ->get('/', [app\Home::class, 'index'])
    ->post('/upload', [app\Home::class, 'upload'])
    ->get('/login', [app\Login::class, 'login'])
    ->post('/login', [app\Login::class, 'login'])
    ->get('/logout', [app\Login::class, 'logout']);
echo $rouse->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));


// $rouse
//     ->get('/php2/lab/lab4/index.php', [app\Home::class, 'index'])
//     ->post('/php2/lab/lab4/index.php?url=upload', [app\Home::class, 'upload'])
//     ->get('/php2/lab/lab4/index.php?url=login', [app\Login::class, 'login'])
//     ->post('/php2/lab/lab4/index.php?url=login', [app\Login::class, 'login'])
//     ->get('/php2/lab/lab4/index.php?url=logout', [app\Login::class, 'logout']);
// echo $rouse->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

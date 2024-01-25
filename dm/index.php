<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMIUANHNT</title>
</head>

<body>
    <h1>Welcome to my Site!!</h1>
    <a href="/home">Home</a>
    <a href="/news">Home</a>
    <a href="/products">Home</a>
</body>

</html>

<?php
session_start();
require_once("./vendor/autoload.php");

use Anhnt\Demo\controllers\Router;
use Anhnt\Demo\controllers\StudentController;


// echo 'emuianhnt';


// echo 'Home';

$route = new Router();

$route->addRoute('/php2/Demo/', function () {
    echo 'welcome homepage <br>';
});

$route->addRoute('/php2/Demo/index.php?url=home', function () {
    echo "home";
});

$route->addRoute('/php2/Demo/index.php?url=news', function () {
    echo ' new page';
});


// lấy ra function index trong studentController và truyền vào route
$route->addRoute('/php2/Demo/index.php/student', [new StudentController(), 'index']);

// echo 'hihi<br>';


// datetime php
// hàm + , - tính toán so sánh với thời gian
// các loại format datetime trong php
// học cách xây dựng Route trong php
// điều hướng website trong php


// gọi trong file index để điều hướng request
// lấy ra địa chỉ gửi lên từ trình duyệt
// $_SEVER super global , biến siêu toàn cục
$url = $_SERVER['REQUEST_URI'];
// var_dump($_SERVER);
echo $url;
$route->getRoute($url);

// var_dump($route);

<?php
use Anhnt\Demo\config\Database;
use Anhnt\Demo\controllers\Router;
use Anhnt\Demo\controllers\StudentController;

require_once("./vendor/autoload.php");
// echo 'emuianhnt';


// echo 'Home';



$route = new Router();
$route->addRoute('/php2/Demo/index.php/home', function () {
    echo "home";
});
$route->addRoute('/php2/Demo/index.php/news', function () {
    echo ' new page';
});


// lấy ra function index trong studentController và truyền vào route
$route->addRoute('/php2/Demo/index.php/student', [new StudentController(), 'index']);

echo 'hihi<br>';


// datetime php
// hàm + , - tính toán so sánh với thời gian
// các loại format datetime trong php
// học cách xây dựng Route trong php
// điều hướng website trong php


// gọi trong file index để điều hướng requist
// gọi trong file index để điều hướng request
// lấy ra địa chỉ gửi lên từ trình duyệt
// $_SEVER super global , biến siêu toàn cục
$url = $_SERVER['REQUEST_URI'];
// var_dump($_SERVER);
echo $url;
$route->getRoute($url);
<?php
session_start();
require_once("./vendor/autoload.php");

// use Dotenv\Dotenv;
// $dotenv = Dotenv::createImmutable(__DIR__ ."");
// $dotenv->load();


use Anhnt\Demo\controllers\Router;
use Anhnt\Demo\controllers\StudentController;
use Anhnt\Demo\controllers\ProductController;

include_once('./public/views/header.php');

$router = new Router();
// demo
// $router->get('', [new StudentController(), 'index']);
// $router->get('showLogin', [new StudentController(), 'showLogin']); // hiển thị đăng nhập
// $router->get('news', [new StudentController(), 'news']);
// $router->get('product', [new StudentController(), 'product']);
// $router->get('logout', [new StudentController(), 'logout']); // đăng xuất
// $router->get('showRegister', [new StudentController(), 'showRegister']);
// $router->get('showSigup', [new StudentController(), 'showSigup']);
// $router->get('allAccount', [new StudentController(), 'allAccount']); // hiển thị tất cả account
// $router->post('login', [new StudentController(), 'login']); //đăng nhập
// $router->post('register', [new StudentController(), 'register']);
// $router->post('sigup', [new StudentController(), 'sigup']); // đăng ký

//get
$router->get('/', [new ProductController(), 'listPRO']);
$router->get('home', [new ProductController(), 'listPRO']);
$router->get('formdangky', [new StudentController(), 'formdangky']); // hien thi dang ky
$router->get('dangxuat', [new StudentController(), 'dangxuat']); // dang xuat
$router->get('cart', [new ProductController(),'cart']);
$router->get('product', [new ProductController(),'listPRO']);
$router->get('xoaMotSpCart', [new ProductController(),'deleteCart']);
$router->get('unsetCart', [new ProductController(),'unsetCart']);

//post
$router->post('dangky', [new StudentController(),'dangky']);
$router->post('dangnhap', [new StudentController(),'dangnhap']);
$router->post('addtocart', [new ProductController(),'addtocart']);
if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = '/';
}


// $url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
// echo $url . ' -- ' . $method . '<br>';
$router->handleRoute($url, $method);

include_once('./public/views/footer.php');

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMIUANHNT</title>
</head>

<body>
    <h1>Welcome to my Site!!</h1>
    <a href="/php2/Demo/index.php">Home</a><br>
    <a href="/php2/Demo/?news">News</a><br>
    <a href="/php2/Demo/?product">product</a><br>
    <?php
    if (!isset($_SESSION['username'])) {
        ?>
        <a href="/php2/Demo/?showLogin">Show login</a><br>

        <?php
    }
    ?>
    <a href="/php2/Demo/?showRegister">Show Register Form</a><br>
    <a href="/php2/Demo/?showSigup">Show Sig up</a><br>
    <a href="/php2/Demo/?allAccount">All Account</a><br>
    <?php
    if (isset($_SESSION['username'])) {
        ?>
        <a href="/php2/Demo/?logout">LOGOUT</a><br>
        <?php
    }
    ?>
</body>

</html>

<?php
require_once("./vendor/autoload.php");

use Anhnt\Demo\controllers\Router;
use Anhnt\Demo\controllers\StudentController;

if (isset($_SESSION['username'])) {
    echo '<br>xin chào: ' . $_SESSION['username'] . '<br>';
} else {
    echo 'login<br>';
}

$router = new Router();
$router->get('/php2/Demo/', [new StudentController(), 'index']);
// $router->get('/php2/Demo/index.php', [new ProductController(), 'listPRO']);
$router->get('/php2/Demo/?showLogin', [new StudentController(), 'showLogin']); // hiển thị đăng nhập
$router->get('/php2/Demo/?news', [new StudentController(), 'news']);
$router->get('/php2/Demo/?product', [new StudentController(), 'product']);
$router->get('/php2/Demo/?logout', [new StudentController(), 'logout']); // đăng xuất
$router->get('/php2/Demo/?showRegister', [new StudentController(), 'showRegister']);
$router->get('/php2/Demo/?showSigup', [new StudentController(), 'showSigup']);
$router->get('/php2/Demo/?allAccount', [new StudentController(), 'allAccount']); // hiển thị tất cả account
$router->post('/php2/Demo/?login', [new StudentController(), 'login']); //đăng nhập
$router->post('/php2/Demo/?register', [new StudentController(), 'register']);
$router->post('/php2/Demo/?sigup', [new StudentController(), 'sigup']); // đăng ký

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
// echo $url . ' -- ' . $method . '<br>';
$router->handleRoute($url, $method);
?>

<?php
include_once('./app/views/header.php');
include_once('./app/views/home.php');
include_once('./app/views/footer.php');
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
    <a href="/php2/lab/lab56/index.php">Home</a><br>
    <a href="/php2/lab/lab56/?news">News</a><br>
    <a href="/php2/lab/lab56/?product">product</a><br>
    <?php
    if (!isset($_SESSION['username'])) {
    ?>
        <a href="/php2/lab/lab56/?showLogin">Show login</a><br>

    <?php
    }
    ?>
    <a href="/php2/lab/lab56/?showRegister">Show Register Form</a><br>
    <a href="/php2/lab/lab56/?showSigup">Show Sig up</a><br>
    <a href="/php2/lab/lab56/?allAccount">All Account</a><br>
    <?php
    if (isset($_SESSION['username'])) {
    ?>
        <a href="/php2/lab/lab56/?logout">LOGOUT</a><br>
    <?php
    }
    ?>
</body>

</html>

<?php
require_once("./vendor/autoload.php");

use Anhnt\Lab56\controllers\Router;
use Anhnt\Lab56\controllers\StudentController;

if (isset($_SESSION['username'])) {
    echo '<br>xin chào: ' . $_SESSION['username'] . '<br>';
} else {
    echo 'login<br>';
}

$router = new Router();
$router->get('/php2/lab/lab56/', [new StudentController(), 'index']);
$router->get('/php2/lab/lab56/index.php', [new StudentController(), 'index']);
$router->get('/php2/lab/lab56/?showLogin', [new StudentController(), 'showLogin']); // hiển thị đăng nhập
$router->get('/php2/lab/lab56/?news', [new StudentController(), 'news']);
$router->get('/php2/lab/lab56/?product', [new StudentController(), 'product']);
$router->get('/php2/lab/lab56/?logout', [new StudentController(), 'logout']); // đăng xuất
$router->get('/php2/lab/lab56/?showRegister', [new StudentController(), 'showRegister']); 
$router->get('/php2/lab/lab56/?showSigup', [new StudentController(), 'showSigup']);
$router->get('/php2/lab/lab56/?allAccount', [new StudentController(), 'allAccount']); // hiển thị tất cả account
$router->post('/php2/lab/lab56/?login', [new StudentController(), 'login']); //đăng nhập
$router->post('/php2/lab/lab56/?register', [new StudentController(), 'register']);
$router->post('/php2/lab/lab56/?sigup', [new StudentController(), 'sigup']); // đăng ký

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
echo $url . ' -- ' . $method . '<br>';
$router->handleRoute($url, $method);
?>
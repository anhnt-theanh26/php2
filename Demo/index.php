<?php session_start(); 
// use Dotenv\Dotenv;
// $dotenv = Dotenv::createImmutable(__DIR__ ."");
// $dotenv->load();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMIUANHNT</title>
</head>

<body>
    <h1>Welcome to my Site!!</h1>
    <a href="/php2/Demo/index.php?url=home">Home</a><br>
    <a href="/php2/Demo/index.php?url=news">News</a><br>
    <a href="/php2/Demo/index.php?url=product">product</a><br>
    <?php
    if (!isset($_SESSION['username'])) {
    ?>
        <a href="/php2/Demo/index.php?url=showLogin">Show login</a><br>

    <?php
    }
    ?>
    <a href="/php2/Demo/index.php?url=showRegister">Show Register Form</a><br>
    <a href="/php2/Demo/index.php?url=showSigup">Show Sig up</a><br>
    <a href="/php2/Demo/index.php?url=allAccount">All Account</a><br>
    <?php
    if (isset($_SESSION['username'])) {
    ?>
        <a href="/php2/Demo/index.php?url=logout">LOGOUT</a><br>
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
$router->get('/', [new StudentController(), 'index']);
$router->get('home', [new StudentController(), 'index']);
$router->get('showLogin', [new StudentController(), 'showLogin']); // hiển thị đăng nhập
$router->get('news', [new StudentController(), 'news']);
$router->get('product', [new StudentController(), 'product']);
$router->get('logout', [new StudentController(), 'logout']); // đăng xuất
$router->get('showRegister', [new StudentController(), 'showRegister']); 
$router->get('showSigup', [new StudentController(), 'showSigup']);
$router->get('allAccount', [new StudentController(), 'allAccount']); // hiển thị tất cả account
// $router->get('fix', [new StudentController(), 'fix']);
$router->post('login', [new StudentController(), 'login']); //đăng nhập
$router->post('register', [new StudentController(), 'register']);
$router->post('sigup', [new StudentController(), 'sigup']); // đăng ký


if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = '/';
}


// $url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
echo $url . ' -- ' . $method . '<br>';
$router->handleRoute($url, $method);
?>
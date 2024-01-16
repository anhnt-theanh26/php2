<?php

use Administrator\Lab123\Controllers\CarController;

require_once('./vendor/autoload.php');

require_once("./src/Views/header.php");

$carController = new CarController;
$url = isset($_GET["url"]) ? $_GET["url"] : "/";
switch ($url) {
    case '/':
        $carController->allCar();
        break;
    case 'add':
        $carController->viewAddCar();
        if(isset($_POST['addsanpham'])){
            $carController->addCar($_POST['name'],$_POST['price'],$_FILES['img'],$_POST['mota']);
        }
        break;
    
}

require_once("./src/Views/footer.php");

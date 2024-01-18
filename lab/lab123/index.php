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

        // danh sách sản phẩm xóa mềm
    case 'soft-delete':
        $carController->allCarSoftDel();
        break;

        // thêm sản phẩm
    case 'add':
        $carController->viewAddCar();
        if (isset($_POST['addsanpham'])) {
            $carController->addCar($_POST['name'], $_POST['price'], $_FILES['img'], $_POST['mota']);
        }
        break;

        // sửa sản phẩm
    case 'update':
        $carController->oneCar();
        if (isset($_POST['updatesanpham'])) {
            $carController->updateCar($_POST['id'], $_POST['name'], $_POST['price'], $_FILES['img'], $_POST['mota']);
        }
        break;

    case 'xoamemsanpham':
        if (isset($_GET['id'])) {
            $carController->softDeleteCar($_GET['id']);
        }
        break;

    case 'restore':
        if (isset($_GET['id'])) {
            $carController->restoreCar($_GET['id']);
        }
        break;

    case 'xoacungsanpham':
        if (isset($_GET['id'])) {
            $carController->restoreCar($_GET['id']);
        }
        break;
}

require_once("./src/Views/footer.php");

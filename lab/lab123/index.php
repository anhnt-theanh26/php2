<?php
use Administrator\Lab123\Controllers\CarController;
require_once('./vendor/autoload.php');

$url = isset($_GET["url"]) ? $_GET["url"] : "/";

switch($url){
    case '/':
        $carController = new CarController;
        $carController->allCar();
        break;
}
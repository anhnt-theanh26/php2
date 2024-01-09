<?php

use App\Http\Controllers\HomeController;
require_once ("./../vendor/autoload.php");
$homeController = new HomeController();
echo $homeController->index();


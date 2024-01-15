<?php

namespace Administrator\Lab123\Controllers;

use Administrator\Lab123\Models\CarModel;

class CarController
{

    function allCar()
    {
        $carModel = new CarModel;
        $car = $carModel->getAllCar();
        var_dump($car);
        include_once('../Views/Products/list.php');
    }
}

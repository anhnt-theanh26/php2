<?php

namespace Administrator\Lab123\Models;

use Administrator\Lab123\Models\Db;

class CarModel extends Db
{
    function getAllCar()
    {
        $sql = "SELECT * FROM car WHERE status = 0;";
        return $this->getData($sql);
    }

    function getAddCar($name, $price, $img, $description)
    {
        $sql = "INSERT INTO car(name, price, img, description) VALUES ('$name', '$price', '$img', '$description');";
        return $this->getData($sql);
    }
}

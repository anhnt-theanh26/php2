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
    public function getUpdateCar($id, $name, $price, $img, $description)
    {
        $sql = "UPDATE car SET name='$name',price='$price',img='$img',description='$description' WHERE id = '$id';";
        return $this->getData($sql);
    }
    public function getOneCar($id)
    {
        $sql = "SELECT * FROM car WHERE id = '$id';";
        return $this->getData($sql, false);
    }
}

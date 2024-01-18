<?php

namespace Administrator\Lab123\Models;

use Administrator\Lab123\Models\Db;

class CarModel extends Db
{
    public function getAllCar()
    {
        $sql = "SELECT * FROM car WHERE status = '0';";
        return $this->getData($sql, true);
    }
    public function getAllSoftDelete()
    {
        $sql = "SELECT * FROM car WHERE status = '1';";
        return $this->getData($sql, true);
    }
    public function getAddCar($name, $price, $img, $description)
    {
        $sql = "INSERT INTO car(name, price, img, description) VALUES ('$name', '$price', '$img', '$description');";
        return $this->getData($sql, false);
    }
    public function getUpdateCar($id, $name, $price, $img, $description)
    {
        $sql = "UPDATE car SET name='$name',price='$price',img='$img',description='$description' WHERE id = '$id';";
        return $this->getData($sql, false);
    }
    public function getOneCar($id)
    {
        $sql = "SELECT * FROM car WHERE id = '$id';";
        return $this->getData($sql, false);
    }
    public function getSoftDeleteCar($id)
    {
        $sql = "UPDATE car SET status = '1' WHERE id = '$id';";
        return $this->getData($sql, false);
    }
    public function getHardDeleteCar($id)
    {
        $sql = "DELETE FROM car WHERE id = '$id';";
        return $this->getData($sql, false);
    }
    public function getRestoreCar($id){
        $sql = "UPDATE car SET status = '0' WHERE id = '$id';";
        return $this->getData($sql, false);
    }
}

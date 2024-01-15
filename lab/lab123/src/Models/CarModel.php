<?php
namespace Administrator\Lab123\Models;

require_once('db.php');
class CarModel
{


    function getAllCar()
    {
        $sql = "SELECT * FROM car WHERE 1;";
        return getData($sql);
    }
}
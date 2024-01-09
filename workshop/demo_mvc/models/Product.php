<?php
require_once('db.php');
function getAllProduct()
{
    $sql = "SELECT * FROM product as pr JOIN category as ct on pr.id_category = ct.id;";
    return getData($sql);
}


function getAddProduct1($name, $price, $image, $id_category){
    $sql = "INSERT INTO(name, price, image, id_category) VALUES('$name', '$price', '$image', '$id_category');";
    return getData($sql);
}
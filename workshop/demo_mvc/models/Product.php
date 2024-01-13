<?php
require_once('db.php');
function getAllProduct()
{
    $sql = "SELECT pr.id, pr.name, pr.price, pr.image, pr.id_category, ct.category_name FROM product as pr JOIN category as ct on pr.id_category=ct.id  WHERE status = '1';";
    return getData($sql);
}


function insertProduct($name, $price, $image, $id_category)
{
    $sql = "INSERT INTO product(name, price, image, id_category) VALUES ('$name','$price','$image','$id_category');";
    return getData($sql);
}

function getOneProduct($id)
{
    $sql = "SELECT pr.id, pr.name, pr.price, pr.image, pr.id_category, ct.category_name FROM product as pr JOIN category as ct on pr.id_category=ct.id WHERE pr.id = '$id';";
    return getData($sql, false);
}

function updateProduct($id, $name, $price, $image, $id_category)
{
    $sql = "UPDATE product SET name='$name',price='$price',image='$image',id_category='$id_category' WHERE id = '$id';";
    return getData($sql, false);
}

function hardDeleteProduct($id)
{
    $sql = "DELETE FROM product WHERE id = '$id';";
    return getData($sql, false);
}

function softDeleteProduct($id)
{
    $sql = "UPDATE product SET status ='0' WHERE id = '$id';";

    return getData($sql, false);
}

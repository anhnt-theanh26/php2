<?php

require_once("models/Product.php");
require_once("models/Category.php");

function listProduct()
{
    $product = getAllProduct();
    require_once("views/product/list.php");
}


function getAddProduct()
{
    $category = getAllCategory();
    require_once("views/product/add.php");
}

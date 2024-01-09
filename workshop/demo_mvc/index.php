<?php

require_once("./controllers/ProductController.php");


$url = isset($_GET["url"]) ? $_GET["url"] : "/";

switch ($url) {
    case "/":
        listProduct();
        break;

    case "add-product":
        getAddProduct();
        if (isset($_POST["Save"]) && $_POST["Save"]) {
            $name = $_POST["name"];
            $price = $_POST["price"];
            $image = $_POST["image"];
            $id_category = $_POST["id_category"];
            echo "$name, $price, $image, $id_category";
        }
        break;
}

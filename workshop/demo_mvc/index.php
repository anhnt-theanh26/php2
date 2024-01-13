<?php

require_once("./controllers/ProductController.php");


$url = isset($_GET["url"]) ? $_GET["url"] : "/";

switch ($url) {
    case "/":
        listProduct();
        break;

    case "add-product":
        addProduct();
        if (isset($_POST["Save"])) {
            addPro($_POST["name"], $_POST["price"], $_FILES["image"], $_POST["id_category"]);
        }
        break;

    case "update-product":
        viewUpdateProduct();
        if (isset($_POST["update"])) {
            updatePro($_POST['id'], $_POST["name"], $_POST["price"], $_FILES["image"], $_POST["id_category"]);
        }
        break;

    case "hard-delete-product":
        hardDeletePro();
        break;
    case "soft-delete-product":
        softDeletePro();
        break;
}

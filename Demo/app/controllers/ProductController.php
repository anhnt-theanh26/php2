<?php

namespace Anhnt\Demo\controllers;

use Anhnt\Demo\models\Product;

class ProductController
{
    public function listPRO()
    {
        $product = new Product();
        $kq = $product->listSP();
        // var_dump($kq);
        include_once('public/views/home.php');
    }




    public function addtocart()
    {
        if (isset($_POST['addtocart'])) {
            $id = $_POST['id'];
            $img = $_POST['img'];
            $price = $_POST['price'];
            $name = $_POST['name'];
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }
            $product = array(
                'id' => $id,
                'img' => $img,
                'price' => $price,
                'name' => $name,
                'quantity' => 1,
            );
            $key = array_search($product['id'], array_column($_SESSION['cart'], 'id'));
            if ($key !== false) {
                $_SESSION['cart'][$key]['quantity']++;
            } else {
                $_SESSION['cart'][] = $product;
            }
            header('location: ?url=/');
        }
    }

    public function cart()
    {
        include_once('./public/views/cart.php');
    }
    public function deleteCart()
    {
        if (isset($_GET['id'])) {
            $idRemove = $_GET['id'];
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['id'] == $idRemove) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    if (isset($_SESSION["cart"]) && empty($_SESSION["cart"])) {
                        unset($_SESSION["cart"]);
                    }
                    echo "<script>alert('Sản phẩm đã được xóa khỏi giỏ hàng.')</script>";
                    break;
                }
            }
        }
        header("location: ?url=cart");
    }

    public function unsetCart()
    {
        if (isset($_SESSION["cart"])) {
            unset($_SESSION["cart"]);
            header("location: ?url=cart");
        }else{
            header("location: ?url=/");
        }
    }
}
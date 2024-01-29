<?php
use Anhnt\Demo\models\Product;
class ProductController{
    public function listPRO()
    {
        $product = new Product();
        $kq = $product->listSP();
        var_dump($kq);
        include_once('./app/views/home.php');   
    }
}
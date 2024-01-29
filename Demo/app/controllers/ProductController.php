<?php
namespace Anhnt\Demo\controllers;

use Anhnt\Demo\models\Product;

class ProductController{
    public function listPRO()
    {
        $product = new Product();
        $kq = $product->listSP();
        var_dump($kq);
        include_once('./public/views/home.php');   
    }

    
}
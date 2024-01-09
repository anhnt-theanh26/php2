<?php

namespace App\Http\Controllers;

use App\Product;
use App\Traits\Logger;
use App\Traits\UploadImage;
use App\User;

// require (__DIR__ . "/../../User.php");
class HomeController
{
    use UploadImage, Logger;
    public function index()
    {
        return $this->uploadImages(). $this->loggers();
        // $user = new User();
        // $users = $user->getListUser();
        // $product = new Product();
        // $products = $product->listProduct();
        // return $users . $products;
    }
}

<?php

namespace Administrator\Lab123\Controllers;

use Administrator\Lab123\Models\CarModel;

class CarController
{

    public function allCar()
    {
        $carModel = new CarModel;
        $car = $carModel->getAllCar();
        include_once('./src/Views/sanpham/list.php');
    }

    public function allCarSoftDel()
    {
        $carModel = new CarModel;
        $car = $carModel->getAllSoftDelete();
        include_once('./src/Views/sanpham/xoamem.php');
    }
    public function viewAddCar()
    {
        include_once('./src/Views/sanpham/add.php');
    }
    public function addCar($name, $price, $img, $description)
    {
        $carModel = new CarModel;
        $target_dir = 'public/img/';
        $target_file = $target_dir . $img['name'];
        if (move_uploaded_file($img['tmp_name'], $target_file)) {
            $imgUrl = $target_file;
        }
        $checkCar = $carModel->getAddCar($name, $price, $imgUrl, $description);
        if (!$checkCar) {
            echo '<script>alert("Thêm sản phẩm thành công")</script>';
        }
    }

    public function oneCar()
    {
        $carModel = new CarModel;
        $car = $carModel->getOneCar($_GET['id']);
        require_once('./src/Views/sanpham/update.php');
    }

    public function updateCar($id, $name, $price, $img, $description)
    {
        $carModel = new CarModel;
        $car = $carModel->getOneCar($id);
        if ($img['size'] > 0) {
            $target_dir = './public/img/';
            $target_file = $target_dir . $img['name'];
            if (move_uploaded_file($img['tmp_name'], $target_file)) {
                $imgUrl = $target_file;
            }
        } else {
            $imgUrl = $car['img'];
        }
        $carModel->getUpdateCar($id, $name, $price, $imgUrl, $description);
        echo "<script>window.location.href = 'index.php?url=/';</script>";
    }

    public function softDeleteCar($id){
        $carModel = new CarModel;
        $carModel->getSoftDeleteCar($id);
        echo "<script>window.location.href = 'index.php?url=/';</script>";
    }

    public function restoreCar($id){
        $carModel = new CarModel;
        $carModel->getRestoreCar($id);
        echo "<script>window.location.href = 'index.php?url=soft-delete';</script>";
    }

    public function hardDeleteCar($id){
        $carModel = new CarModel;
        $carModel->getHardDeleteCar($id);
        echo "<script>window.location.href = 'index.php?urlsoft-deletescript>";
    }
}
?>
<!-- <script>
    window.location.href = 'index.php?url=/';
</script> -->
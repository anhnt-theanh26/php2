<?php

namespace Administrator\Lab123\Controllers;

use Administrator\Lab123\Models\CarModel;

class CarController
{

    function allCar()
    {
        $carModel = new CarModel;
        $car = $carModel->getAllCar();
        include_once('./src/Views/sanpham/list.php');
    }

    function viewAddCar()
    {
        include_once('./src/Views/sanpham/add.php');
    }
    function addCar($name, $price, $img, $description)
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
        
    }
}
?>
<!-- <script>
    window.location.href = 'index.php?url=/';
</script> -->

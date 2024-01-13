<?php

require_once("models/Product.php");
require_once("models/Category.php");
session_start();
function listProduct()
{
    // tạo ra 1 biến để hứng dữ liệu từ model 
    $product = getAllProduct();
    require_once("views/product/list.php");
}


function addProduct()
{
    $category = getAllCategory();
    require_once("views/product/add.php");
}

function addPro($name, $price, $image, $id_category)
{
    // xác định rules
    // $name  (tên sản phẩm): không được bỏ trống , tối thiểu ký tự
    // $price (giá tiền) : bắt buộc nhập, số nguyên, số nguyên dương
    // $image (ảnh sản phẩm):  phải là định dạng (png, jpg, ...) giới hạn dung lượng
    // $id_category (danh mục sản phẩm): buộc phải truyền

    // khai báo mảng chứa lỗi trả về view
    $error = [];
    // validate tên sản phẩm
    if (empty(trim($name))) {
        $error['name']['required'] = 'Tên sản phẩm không được để trống';
    } else {
        if (strlen(trim($name)) < 6) {
            $error['name']['length'] = 'Tên sản phẩm phải lớn hơn 6 ký tự';
        }
    }

    // validate ảnh sản phẩm
    if (empty($image['name'])) {
        $error['image']['required'] = 'Ảnh sản phẩm không được để trống';
    } else {
        $allowerFomarts = ['jpg', 'png', 'jpeg'];
        $maxFileSize = 5 * 1024 * 1024; //5mb
        $imgInfo = getimagesize($image['tmp_name']);
        if (!$imgInfo || !in_array(strtolower(pathinfo($image['name'], PATHINFO_EXTENSION)), $allowerFomarts)) {
            $error['image']['format'] = 'Ảnh sai định dạng';
        } else if ($image['size'] > $maxFileSize) {
            $error['image']['size'] = 'dung lượng ảnh quá lớn';
        }
    }

    if (!empty($error)) {
        $_SESSION['error'] = $error;
        header('location: index.php?url=add-product');
    } else {
        $target_dir = 'public/image/';
        $target_file = $target_dir . $image['name'];
        if (move_uploaded_file($image['tmp_name'], $target_file)) {
            $imageUrl = $target_file;
        }
        $checkAdd = insertProduct($name, $price, $imageUrl, $id_category);
        if (!$checkAdd) {
            echo '<script>alert("Thêm sản phẩm thành công")</script>';
        }
    }
}


function viewUpdateProduct()
{
    $category = getAllCategory();
    $proId = $_GET['pro_id'];
    $product = getOneProduct($proId);
    require_once("views/product/update.php");
}


function updatePro($id, $name, $price, $image, $id_category)
{
    // sử lý ảnh
    $product = getOneProduct($id);
    if ($image['size'] != 0) {
        $target_dir = 'public/image/';
        $target_file = $target_dir . $image['name'];
        if (move_uploaded_file($image['tmp_name'], $target_file)) {
            $imageUrl = $target_file;
        }
    } else {
        $imageUrl = $product['image'];
        updateProduct($id, $name, $price, $imageUrl, $id_category);
        header("location: index.php?url=/");
    }
}

function hardDeletePro()
{
    $id = $_GET['pro_id'];
    hardDeleteProduct($id);
    header("location: index.php?url=/");
}

function softDeletePro()
{
    $id = $_GET["pro_id"];
    softDeleteProduct($id);
    header("location: index.php?url=/");
}
?>
<?php
require_once('../../model/category_db.php');
require_once('../../model/database.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_categories';
}
$action = strtolower($action);
switch ($action) {
    case 'list_categories':
        $categories = get_categories();
        include('category_list.php');
        break;

    case 'delete_category':
        $categoryID = $_POST['categoryID'];
        delete_category($categoryID);
        header("location: .");
        break;
     
    case 'add_category':
        $categoryName = $_POST['categoryName'];
        if(empty($categoryName)){
            echo 'ban phai nhap ten';
        }else{
            $categoryID = add_category($categoryName);
        } 
        header("location: .");
        break;

    case 'update_category':
        $categoryID = $_POST['categoryID'];
        $categoryName = $_POST['categoryName'];
        if(empty($categoryName)){
            echo 'ban phai nhap ten';
        }else{
            update_category($categoryID, $categoryName);
        } 
        header("location: .");
        break;
}

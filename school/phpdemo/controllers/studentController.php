<?php
include '../models/studentModel.php';
// $name;
// if (!empty($_GET['name'])) {
//     $name = $_GET['name'];
// } else {
//     $name = '';
// }
$name = (!empty($_GET['name']) ? ($_GET['name']) : 'khong co name');
// echo $name;
$data = find_id($name);
// $hihi = 'heheeh';
// $ten = find($hihi);
// echo $ten;
include '../views/studentView.php';
?>
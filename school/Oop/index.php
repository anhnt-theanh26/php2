<?php
use Admin\Oop\Rectangle;
use Admin\Oop\Square;
use Admin\Phpdemo\models\StudentModel;

require_once('./Square.php');

$square = new Square(10);
// gọi biến pi của hàm Square
// không cần khởi tạo instance 
echo $square::$pi . '<br>';
echo $square::HANG_SO . '<br>';
$square->info(); // info là function của lớp cha
// của square
echo '<br>';
echo $square->dienTich() . '<br>';
echo $square->tinhChuVi() . '<br>';
echo $square->tinhDienTich() . '<br>';


echo $square->width;

// inforMenu là function trong trait
echo $square->infoMenu();

// kiểm tra kiểu class của 1 instance;
if ($square instanceof Square) {
    // true 
    echo 'Square' . '<br>';
}
if ($square instanceof Rectangle) {
    // true 
    echo 'Rectangle' . '<br>';
}
if ($square instanceof StudentModel) {
    // false 
    echo 'StudentModel' . '<br>';
}


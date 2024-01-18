<?php
namespace Admin\Oop;
use Admin\Oop\Shape;
use Admin\Oop\Action;
include('./Rectangle.php');

class Square extends Rectangle implements Shape, Action
{

    // trait: đa kế thừa trong php 
    function echoInfo()
    {
    }
    function echoName()
    {
    }

    //static tồn tại độc lập không phụ thuộc vào 
    static $pi = 3.14;

    //const: biến hằng số với từ khóa const, chỉ cấp phát giá trị lần đầu, không thay đổi được
    const HANG_SO = 100;

    public function __construct($size)
    {
        // tái sử dụng hàm khởi tạo của lớp cha
        // với từ khóa parent
        parent::__construct($size, $size);
    }
    public function tinhChuVi()
    {
        // truy cập biến width heigth từ lớp cha
        $chuVi = $this->width + $this->heigth;
        return $chuVi;
    }
    public function tinhDienTich()
    {
        // gọi function của lớp cha 
        return $this->dienTich();
    }

    // nếu sử dụng info sẽ bị lỗi do function info có từ khóa final ở lớp cha
    // function info(){
    //     $this->info();
    // }
    public function dienTichNew($w, $h)
    {
        // định nghĩa phần thân của phương thức của interface
    }
    public function chuViNew($w, $h)
    {
        // định nghĩa phần thân của phương thức của interface
    }

    function runnew($w, $h){}
    function displaynew($w, $h){}
}
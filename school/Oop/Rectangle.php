<?php
namespace Admin\Oop;
// use Admin\Oop\Shape2;
abstract class Rectangle
{
    public $width;
    public $heigth;

    // khai báo sử dụng trait
    use Shape2;

    abstract function echoInfo();
    abstract function echoName();
    public function __construct($width, $heigth)
    {
        $this->width = $width;
        $this->heigth = $heigth;
    }

    public function dienTich()
    {
        $S = $this->width * $this->heigth;
        return $S;
    }

    // final khóa: không cho phép ghì đè phương thức
    final function info()
    {
        echo $this->width . '-' . $this->heigth;
    }
}
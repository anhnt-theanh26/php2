<?php
namespace Anhnt\Demo\config;

class Database
{
    // định nghĩa các thông số
    //host
    // username
    // password
    // phức tạp hơn thì tạo 1 file riêng để chứa các thông tin nhạy cảm 
    public $name;

    

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        echo $this->name;
    }
}
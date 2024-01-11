<?php
namespace Admin\Phpdemo;
class People
{
    public $name;
    public $address;

    public function print()
    {
        echo $this->name . ' - ' . $this->address;
    }
}

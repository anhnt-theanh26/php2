<?php
namespace Administrator\Asm\models;

class Dtb
{
    public function __construct()
    {
        $severname = 'sql.freedb.tech';
        $username = 'freedb_anhnt_lab123';
        $password = 'a3wAp88A#eM*SE!';
        $conn = new \mysqli($severname, $username, $password);
        if(!$conn){
            die('Connection failed' . $conn->connect_error());
        }
        echo "connected succesfully";
    }

    public function Helloword()
    {
        echo ' Hello Word';
    }
}
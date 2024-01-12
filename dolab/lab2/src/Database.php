<?php

namespace Admin\Lab2;

use mysqli;

class Database
{
    public function __construct()
    {
        $servername = "192.168.64.2";
        $username = "lab1";
        $password = "";
        $conn = new mysqli($servername, $username, $password);
        if (!$conn) {
            die("connect failed" . $conn->mysqli_error());
        }
        echo("Connected sucessfully");
    }
    public function HelloWorld(){
        echo("hello word");
    }
}

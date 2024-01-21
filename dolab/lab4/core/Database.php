<?php

namespace Core;

use Exception;
use mysqli;

class Database
{
    public function __construct()
    {

        $severname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'lab4';
        $conn = new mysqli($severname, $username, $password, $dbname);
        if (!$conn) {
            die('ket noi that bai' . $conn->connect_error());
        }
        echo 'ket noi thanh cong';
    }
    public function HelloWorld()
    {
        echo 'Hello World';
    }

    protected function connect()
    {
        try {
            $severname = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'lab4';
            $conn = new mysqli($severname, $username, $password, $dbname);
            if (!$conn) {
                die('ket noi that bai' . $conn->connect_error());
            }
            return $conn;
        } catch (Exception $th) {
            print 'error' . $th;
            die();
        }
    }
}

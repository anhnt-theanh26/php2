<?php

namespace app\core;

use Exception;
use mysqli;

class Database
{

    function __construct()
    {
        $severname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'lab4';
        $conn = new mysqli($severname, $username, $password, $dbname);

        if (!$conn) {
            die('Connecttion failled: ' . $conn->connect_error());
        }
        echo'KẾT NỐI THÀNH CÔNG';
    }
    protected function connect()
    {
        try {
            $severname = '192.168.64.2';
            $username = '';
            $password = '';
            $dbname = 'lab4';
            $conn = new mysqli($severname, $username, $password, $dbname);

            if (!$conn) {
                die('Connecttion failled: ' . $conn->connect_error());
            }

            return $conn;
        } catch (Exception $e) {
            print 'error';
            die();
        }
    }

    public function helloWorld()
    {
        echo 'hello world';
    }
}

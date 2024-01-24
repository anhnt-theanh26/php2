<?php

namespace Anhnt\Demo\controllers;

class Router
{

    // 1 mảng chứa địa chỉ các action handle
    public $routes = [];

    // hàm thêm route vào dự án
    public function setRoute($url, $action)
    {
        $this->routes[$url] = $action;
    }

    public function get($url, $action)
    {
        $this->routes[$url]['GET'] = $action;
    }

    public function post($url, $action)
    {
        $this->routes[$url]['POST'] = $action;
    }
    public function showLogin()
    {
        echo '
        <form action="" method="post" enctype="application/x-www-form-urlencoded">
            <input type="text" name="username" id="" placeholder="Nhập username....">
            <input type="password" name="password" id="" placeholder="Nhập password....">
            <button type="submit">Login</button>
        </form>
        ';
    }


    public function showRegister()
    {
        echo 'showRegister';
    }

    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            echo 'dang nhap thanh cong';
        } else {
            echo 'vui long nhap user va pass';
        }
    }

    public function handleRoute($url, $action)
    {
        if(isset($this->routes[$url][$action])){
            $action = $this->routes[$url][$action];
        }
    }
    public function getRoute($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $handle = $this->routes[$url];
            // thực thi function handle
            if (is_callable($handle)) {
                $handle();
            } else {
                echo '404 Not Found Function';
            }
        } else {
            echo '404 Not Found';
        }
    }

    public function register()
    {
        echo 'register';
    }






}

?>
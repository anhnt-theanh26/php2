<?php

namespace Anhnt\Demo\controllers;

class Router
{

    // 1 mảng chứa địa chỉ các action handle
    public $routes = [];

    // hàm thêm route vào dự án
    public function addRoute($url, $handle)
    {
        $this->routes[$url] = $handle;
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
}

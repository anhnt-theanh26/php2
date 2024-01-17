<?php

namespace Anhnt\Demo\controllers;

class Router
{

    // 1 mảng chứa địa chỉ các action
    public $routes = [];

    public function addRoute($url, $handle)
    {
        $this->routes[$url] = $handle;
    }

    public function getRoute($url)
    {
        if (array_change_key_case($url, $this->routes[$url])) {
            $handle = $this->routes[$url];
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
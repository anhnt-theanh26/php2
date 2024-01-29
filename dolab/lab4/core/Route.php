<?php

namespace Core;
// require_once "RouteNotFoundException.php";
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . '/RouteNotFoundException.php';

use Core\RouteNotFoundException;

class Route
{

    private array $routes;

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;
        return $this;
    }

    public function resolve(string $requestUrl)
    {
        $route = explode('?', $requestUrl)[0];
        $action = $this->routes[$route] ?? null;
        // if (!$action) {
        //     // throw new RouteNotFoundException();
        //     // return new RouteNotFoundException('');
        //     echo 'lỗi';
        // }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }
}

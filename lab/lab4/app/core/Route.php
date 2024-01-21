<?php

namespace app\core;
use app\core\RouteNotFoundException;

class Route
{

    private array $routes;

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        // var_dump($route);
        $this->routes[$requestMethod][$route] = $action;
        // var_dump($this->route['post']);
        return $this;
    }

    public function resolve(string $requestUrl)
    {
        $route = explode('?', $requestUrl)[0];
        $action = $this->routes[$route] ?? null;
        // try {
        //     if (!$action) {
        //         throw new RouteNotFoundException();
        //         throw new \Exception("loi roi ");
        //     }
        // } catch (\Exception $th) {
        //     echo $th->getMessage();
        // }
        if (!$action) {
            echo 'gặp phải lỗi rồi';    
            // throw new RouteNotFoundException();
        }
        if (is_callable($action)) {
            return call_user_func($action);
        }
        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func([$class, $method], []);
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
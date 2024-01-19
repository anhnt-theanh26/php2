<?php
namespace Administrator\Lab4\core;

class Route
{
    private array $route;

    public function register(string $requesMethod, string $route, callable|array $action): self
    {
        // var_dump($route);
        $this->route[$requesMethod][$route] = $action;
        // var_dump($this->route['post']);
        return $this;
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action) :self
    {
        return $this->register('post', $route, $action);
    }
}
<?php

namespace App;


class Router
{
    private $routes = [];
    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;
        return $this;

    }

    public function resolve(string $requestURI)
    {
        $route = parse_url($requestURI, PHP_URL_PATH);
        $action = $this->routes[$route] ?? null;

        if (!$action) {
            throw new \Exception("NOT FOUND");
        }

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
        throw new \Exception("NOT FOUND");
    }
}
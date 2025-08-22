<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $callback)
    {
        $this->routes['GET'][$this->normalize($uri)] = $callback;
    }

    public function post($uri, $callback)
    {
        $this->routes['POST'][$this->normalize($uri)] = $callback;
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = $this->normalize($uri);

        if (isset($this->routes[$method][$uri])) {
            $callback = $this->routes[$method][$uri];

            if (is_array($callback)) {
                [$controller, $method] = $callback;
                $obj = new $controller;
                return $obj->$method();
            }

            if (is_callable($callback)) {
                return call_user_func($callback);
            }
        }

        http_response_code(404);
        echo "<h1>404 - Página no encontrada</h1>";
    }

    protected function normalize($uri)
    {
        return '/' . trim($uri, '/');
    }
}

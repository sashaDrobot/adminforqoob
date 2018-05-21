<?php

namespace backend\core;

class Router {

    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $arr = require 'backend/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
        $this->run();
    }

    public function add($route, $params) {
       $route = '#^'.$route.'$#';
       $this -> routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if(preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run() {
        if($this->match()) {
            $path = 'backend\controllers\\'.ucfirst($this->params['controller'].'Controller');
            if(class_exists($path)){
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller =  new $path($this->params);
                    $controller->$action();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }

}
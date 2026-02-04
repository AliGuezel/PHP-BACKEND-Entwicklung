<?php

namespace system;

class Bootstrap {

    public function __construct() {
        // URL: hallo/methode2/test
        if (isset($_GET['nav'])) {
            $nav = $_GET['nav'];
        } else {
            $nav = "index";
        }
        $nav_arr = explode('/', $nav);

        $controllerFilename = '../controllers/' . ucfirst(strtolower($nav_arr[0])) . 'Controller.php';
        $className = $nav_arr[0] . 'Controller';
        if (file_exists($controllerFilename)) {
            require_once $controllerFilename;
        } else {
            throw new \Exception("Controller $className existiert nicht");
        }
        $controller_obj = new $className;
        if (isset($nav_arr[1])) {
            if (method_exists($controller_obj, $nav_arr[1])) {
                $args_arr = array_slice($nav_arr, 2);
                call_user_func_array([$controller_obj, $nav_arr[1]], $args_arr);
            } else {
                throw new \Exception("Methode " . $nav_arr[1] . " existiert nicht");
            }
        }
    }
}

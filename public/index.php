<?php

spl_autoload_register(function ($className) {
    if(file_exists('../controller/' . $className . '.php')) {
        include '../controller/' . $className . '.php';
    }
    if(file_exists('../model/' . $className . '.php')) {
        include '../model/' . $className . '.php';
    }
});

include '../config.php';
include '../routes.php';

$request = $_SERVER["REQUEST_URI"];

foreach($routes as $route => $action) {
    if(preg_match("#^". BASE_DIRECTORY . $route . "#", $request)) {
        $action = explode('@', $action);
        $controller = new $action[0]();
        $function = $action[1];
        
        $controller->$function();
        break; 
    }                             
}
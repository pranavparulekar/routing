<?php

define('DOCROOT', dirname(__FILE__));
define('CONTROLLER', '/Mojo/App/Controller/');

echo "<pre>";
$url = $_SERVER['REQUEST_URI'];

$urlArr = explode('/', $url);

$controllerPath = explode("_", $urlArr[1]);
$folder = ucfirst(strtolower($controllerPath[0]));
$class = $file = ucfirst(strtolower($controllerPath[1]));
$method = $urlArr[2];
$param_arr = array_slice($urlArr, 3);

if (is_dir(DOCROOT . CONTROLLER . $folder)) {
    if (is_file(DOCROOT . CONTROLLER . $folder . '/' . $file . '.php')) {
        require_once DOCROOT . CONTROLLER . $folder . '/' . $file . '.php';

        if (in_array($folder . '\\' . $file, get_declared_classes())) {
            
            $classStr = "$folder\\$file";
            $obj = new $classStr();
            call_user_func_array([$obj, $method], $param_arr);
        }
    }
}
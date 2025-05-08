<?php
require_once 'model/database.php';
$controller = 'estudiante';

if(isset($_REQUEST['c'])){
    //obtener el controlador
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    //Instanciamos el con trolador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'controller';
    $controller = new $controller;
    //llamar
    call_user_func(array($controller, $accion));
}else{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller';
    $controller = new $controller;
    $controller->Index();
}

?>
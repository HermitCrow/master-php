<?php

require_once 'Autoload.php';


if(isset($_GET['controller']) && class_exists($_GET['controller'].'Controller')){
    $ControllerName = $_GET['controller'].'Controller';
    $controller = new $ControllerName();
    
    
if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
    $action = $_GET['action'];
    $controller->$action();
}else{
    echo "La pagina que buscas no existe.";
}

} else {
    echo "El controlador no existe";
}





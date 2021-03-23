<?php

require_once 'autoload.php';


if (isset($_GET['controller'])) {
    $ControllerName = $_GET['controller'] . 'Controller';
} else {
    echo "La pagina que buscas no existe.";
    exit();
}//Fin If else    

if (class_exists($ControllerName)) {
    $controller = new $ControllerName();
    
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    } else {
        echo "La pagina que buscas no existe.";
    }//Fin If else
} else {
    echo "La pagina que buscas no existe.";
}//Fin If else



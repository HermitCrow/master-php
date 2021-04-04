<?php
session_start();

require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parametros.php';
require_once 'helper/utils.php';
require_once 'Views/layout/header.php';
require_once 'Views/layout/sidebar.php';


function Show_errore(){
    $error = new errorController();
    $error->index();
}
if (isset($_GET['controller'])) {
    $ControllerName = $_GET['controller'] . 'Controller';
    

}elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $ControllerName = controller_default;
} else {
    
    Show_errore();
    exit();
}//Fin If else    

if (class_exists($ControllerName)) {
    $controller = new $ControllerName();

    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    }elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $action = action_default;
        $controller->$action();
    } else {
        Show_errore();
    }//Fin If else
} else {
    Show_errore();
}//Fin If else

require_once 'Views/layout/footer.php';

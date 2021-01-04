 <environment exclude="Development">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
              asp-fallback-href="~/lib/bootstrap/dist/css/bootstrap.min.css"
              asp-fallback-test-class="sr-only" asp-fallback-test-property="position" asp-fallback-test-value="absolute" />
        <link rel="stylesheet" href="~/css/site.min.css" asp-append-version="true" />
 </environment>
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





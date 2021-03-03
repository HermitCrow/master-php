<?php

require_once '../vendor/autoload.php';

$frutas = array("Manzanas", "narangas", "uvas");

//firephp = FirePHP::getInstance(true);
//$firephp->fb($frutas);

\FB::log($frutas);

$nombre = array("Ejecutivo" => "Antonio","Empleado" => "Juan");
\FB::log($nombre);

echo "Hola Mundo !! ".$nombre['Ejecutivo'];

\FB::log("Muestra esto en consola del navegador.");


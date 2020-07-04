<?php

/* 
 * Ejercicio 2. Escribir un programa en php que añada valores a un array
 * mientras que su lungitud sea menor a 120 y luego mostrar por pantalla
 */

$texto = array();
$l = 0;

//Llenando el array
do{    
    array_push($texto, "Dady");
    $longitud = count($texto);
}while ($longitud < 120);
//mostrando el Array

foreach ($texto as $datos) {
    $l++;
    echo "Datos del array ->$l - $datos <br/>";
}
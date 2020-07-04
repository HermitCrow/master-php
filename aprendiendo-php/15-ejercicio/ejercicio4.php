<?php

/* 
 *Crear un scrip en php que tenga 4 variables, una de tipo array, otra de tipo 
 * string, otra de tipo int y otra booleana y que tenga un mensaje
 * segun el tipo de variable que sea.
 */

$arreglo = array('hola',88);
$texto = "hola";
$numero = 7;
$bool = true;

if(is_array($arreglo)){   
    echo "<font color='green'><h1>Usted tiene un ".gettype($arreglo).'</h1><br/>';
    foreach ($arreglo as $value) {
        echo $value.'<br/>';
    }
    echo '</font><hr/>';
}
if(is_string($texto)){
    echo "<font color='blue'><h1>Usted tiene un ".gettype($texto).'</h1><br/>';
    echo "El contenido es >> $texto </font><hr/>";
}
if(is_int($numero)){ 
    echo "<font color='red'><h1>Usted tiene un ".gettype($numero).'</h1></font><br/>';
    echo "El contenido es >> $numero </font><hr/>";
}
if(is_bool($bool)){
    echo "<font color='purple'><h1>Usted tiene un ".gettype($bool).'</h1><br/>';
    echo "El contenido es >> $bool </font><hr/>";
}    
<?php

/* 
 * Variables Globales: son las que se declaran fuera de una funcion y disponible
 *  dentra y fuera de las funciones 
 * 
 * Variables locales: son las que se definen dentro de una funcion y estan disponibles en esa funcion
 */
//variable Global
$frase = "Ni a NI a";

function hola(){
    global $frase;
    echo "$frase <br/>" ;
    $year = 2019;
    echo $year;
    return $year;
}


//echo hola();

//funciones variables

function buenasdias(){
    return "Hola Buenos dias";
}

function buenastardes(){
    return "Hey!! Que tal la comida";
}

function buenasNoches(){
    return "¿Te vas a dormir ya? Buenas noches ";
}

$horario="dias";
$mifunci = "buenas".$horario;

echo $mifunci();

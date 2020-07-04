<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Para Debuggear
$nombre = "Emmanuel";
var_dump($nombre);

//Fechas
echo date('d-m-Y');
echo '<br/>';
echo time();

//Matematica

echo '<br/>Raiz cuadrada de 10: '. sqrt(10);

//Numero aliatorio

echo '<br/>';
echo "Numero aleatorio entre 1 y 100: ". rand(1,100);

//Sacar numero pi

echo '<br/>';
echo pi();

//Redondeo

echo "<br/>";
echo "redondiar ". round(89.9864, 1) ;

// Mas funciones
echo '<br/>';
echo gettype($nombre);
// detectar tipos
if(is_string($nombre)){
    echo '<br/>';
    echo "Es texto. ";
}
echo '<br/>';
if(!is_float($nombre)){
    echo 'La raiable no es texto';
}
echo '<br/>';
// Comprobar si existe
if(isset($g)){
    echo 'existe';
} else {
    echo 'no existe';
}
echo '<br/>';
//Limpiar espacios por de lante de la variable y por detras
$frase="   MIdsffd     ";
var_dump(trim($frase));

//eliminar variables y array

$an = 2020;
unset($an);
var_dump($an);

//comprobar si esta vacio exixte o es 0

$ta = true;

if(empty($ta)){
    echo 'Esta vacia';
} else {
    echo 'no esta vacia';    
}
//contar los caracteres de una cadena
echo '<br/>';
$ana ="123456789";
echo strlen($ana);

//encontra caracter
echo '<br/>';
$frases = "jorge se caso y se lamento de por vida";
echo strpos($frases, "j");

//Remplazar palabras
echo '<br/>';
echo str_replace("vida", "Mi", $frases);

//Mayscula y minscula

echo '<br/>';
echo strtolower($frases);
echo '<br/>';
echo strtoupper($frases);
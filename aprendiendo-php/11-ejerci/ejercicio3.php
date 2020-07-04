<?php

/* 
 * Imprimir el cuadrado(un numero multiplicado por si mismo) 
 * del los 40 primeros numeros naturales.
 * PD: Utilisar el bucle WHILE
 */

$numero = 0;
while ($numero <= 40){
    
    $resultado=$numero*$numero;
    echo "<h1>$numero * $numero = $resultado</h1>";
    $numero++;
    
}
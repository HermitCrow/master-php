<?php



$cantantes = ['2pac','cina','Alma'];
$numeros = [1,2,5,8,9,6,7,4,3];

//Ordenar
sort($numeros);
var_dump($numeros);

//Añadir elementos a un array
$cantantes[] = "Dom" ;

array_push($cantantes, "Dady");

//Eliminar elementos del array
array_pop($cantantes);
unset($cantantes[2]);

//Aleatorio

$indice = array_rand($cantantes);

//darle la vuelta a un array

var_dump(array_reverse($numeros));

$resulatado = array_search('2pac', $cantantes);
echo $resulatado;
echo '<hr/>';
//Contar

$valor = count($numeros);
echo $valor;
echo '<hr/>';
echo sizeof($cantantes);



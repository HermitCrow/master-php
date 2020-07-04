<?php


// Operadores Aritmeticos

$numero1 = 65;
$numero2 = 33;

echo 'Suma: '.($numero1 + $numero2).'<br/>';
echo 'Restar: '.($numero1 - $numero2).'<br/>';
echo 'Mutiplicacion: '.($numero1 * $numero2).'<br/>';
echo 'Divicion: '.($numero1 / $numero2).'<br/>';
echo 'Resto: '.($numero1 % $numero2).'<br/>';


// Operadores incremento y decremento

$year = 1991;

//Incremento

//$year = $year + 1;
$year++;

//Decremento

//$year = $year - 1;
$year--;

//Pre - incremento

//$year = 1 + $year;
++$year;

//Pre - decremento

//$year = 1 - $year;
--$year;

echo "<h1>$year</h1>";

// Operadores de asignacion

$edad = 55;

echo $edad.'<br>';
echo ($edad+=5);
//var_dump($edad);
?>
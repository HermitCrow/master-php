<?php

/* 
 * hacer un programa con un array con 8 numeros, recorer y mustrar, ordenar y 
 * mostrar, mostrar la longitud y buscar en el array.
 */

//Declarando el array
$numero = [6,8,3,2,5,1,77,4];

//Recorriendo el array
echo '<h1>Recoriendo el array</h1>';
echo '<ul>';
foreach ($numero as $resul) {
echo "<li>$resul</li>";    
}
echo '</ul><hr/>';

//Ordenando el array

sort($numero);  

echo '<h1>Ordenando el array</h1>';
echo '<ul>';
foreach ($numero as $resul) {
echo "<li>$resul</li>";    
}
echo '</ul><hr/>';

//Mostrando longitud

echo '<h1>Mostrando longitud del Array</h1>';
$longitud = count($numero);
echo "El array tiene una longitud de $longitud";
echo '<hr/>';

//Buscar en el Array
if(isset($_GET['numero'])){
$busqueda = $_GET['numero'];
echo "<h1>Buscando en el Array el numero: $busqueda</h1>";
$search = array_search($busqueda, $numero);
if(!empty($search)){
     echo "El numero que busca esta, en el indice: $search";
} else {
    echo "El numero que busca no existe";
}

} else {
    echo 'Digite el numero a buscar';    
}

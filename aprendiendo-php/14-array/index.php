<?php

/* 
 *arrys
 * Un array o areglo es una coleccion de datos o valores bajo un unico. 
 * nombre a los que se puede acceder mediante un indice numerico o alfanumerico.
 */



$peliculas = array('Batman','Iron Man','Spiderman');
$cantantes = ['2pac','cina'];

//Array asociativo
$personas = array(
    'nombre' => 'Emmanuel',
    'apellido' => 'Ulloa',
    'edad' => '27'
);

//var_dump($personas);
echo '<h1>Listado de Peliculas</h1>';
echo '<ul>';
for($c=0;$c < count ($peliculas);$c++){
    echo "<li>$peliculas[$c]</li>";
}
echo '</ul>';

//recorrer con foreach
echo '<h1>Listados de cantante</h1>';
echo '<ul>';
foreach ($cantantes as $cantante){
    
    echo "<li>$cantante</li>";
}
echo '<ul>';

//Array Multidimencionales

$contactos = array(
    array(
    'nombre'=>'Emmanuel',
    'email' => 'eulloa'
),
    array(
    'nombre'=>'Nairoby',
    'email' => 'nabi'
),
    array(
    'nombre'=>'valerie',
    'email' => 'valeri'
)
    );

   // var_dump($contactos);
    
    //echo $contactos[1]['nombre'];
    foreach ($contactos as $key => $contacto) {
    echo $contacto['nombre'];
}
<?php

require_once 'coche.php';

$coche = new Coche("Azul", "Honda", "Civic",250,350,5);
echo $coche->mostrarInformacion($coche);
//var_dump($coche);
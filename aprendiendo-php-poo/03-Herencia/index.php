<?php 
require_once 'class.php';

$obj = new Persona();
$obj2 = new Informatico();
$obj3 = new TecnicoenRedes();

$obj->setNombre("Nairoby");
$obj->setApellido("Soto Jimenez De Ulloa");
$obj->setEdad(32);

$obj2->setNombre("Emmanuel");
$obj2->setApellido("Ulloa Dominguez");
$obj2->setEdad(29);

$obj3->setNombre("Valerie Maya");
$obj3->setApellido("Ulloa Soto");
$obj3->setEdad(1);

//echo $obj->hablar();

var_dump($obj);
var_dump($obj2);
var_dump($obj3);
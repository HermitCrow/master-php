<?php

/* 
 * crear un array con el contenido de la tabla:
 * 
 */

$juegos = array(
    'ACCION'=> array('GTA','COD','PUGB'),
    'AVENTURA' => array('ASSASINS','CRASH','PRINCE OF PERSIA'),
    'DEPORTES'=> array('FIFA 19','PES 19','MOTO GP 19') 
    ); 
    $categorias = array_keys($juegos);
?>

<table border="1">
    <?php require_once 'ejercicio5/head.php';?>
    <?php require_once 'ejercicio5/premera.php';?>
    <?php require_once 'ejercicio5/segunda.php';?>
    <?php require_once 'ejercicio5/tercera.php';?>
  
</table>

    
<?php

/* 
 *Una sesion lo que hace es almacenar y percistir datos de ususario mientras 
 * navega en un sitio web hasta que cierre sesion o el navegador. 
 */

//Inicio la sesion
session_start();
//Variable normal
$variable = "Hola carlito";
//variable de Sesion
$_SESSION['estar'] = "Hola Emmanuel sesion activa";

echo $variable."<br/>";
echo $_SESSION['estar'];
<?php

/* 
 * Ejercicio 1. Crear una sesion que aumente su valor en uno o disminulla en uno
 * en funcion de si el parametro get counter esta a uno o a cero.
 */

session_start();
if(!isset($_SESSION["numero"])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
}

if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['numero']--;
}
?>


<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 1</title>
    <div>
    <a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
    <a href="ejercicio1.php?counter=0">Disminuir el valor</a><br/>
    </div>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
</body>
</html>
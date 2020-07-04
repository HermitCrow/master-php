<?php
$error = 'faltan_datos';
if(!empty($_POST['nombre'])&&!empty($_POST['apellido'])&&!empty($_POST['edad'])&&!empty($_POST['email'])&&!empty($_POST['pass'])){
    $error = 'no_faltan_valores';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    echo '<font color="red"><h1>Hola mi amor</h1></font>';
} else {
    $error = 'faltan_datos';
    header("Location:index.php?error=$error");
}


?>



<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validar Formulario PHP</title>
    </head>
    <body>
        
    </body>
</html>
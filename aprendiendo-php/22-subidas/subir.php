<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
$nomTemporal = $archivo['tmp_name'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
      
        move_uploaded_file($nomTemporal, 'images/'.$nombre);
        header("Refresh: 5; URL=index.php");
        echo '<h1>Imagen subida Correctamente.</h1>';
   
}else{
    header("Refresh: 5; URL=index.php");
    echo '<h1>Sube una Imagen con un Formato Correcto.</h1>';
    
}
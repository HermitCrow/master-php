<?php

//Manejado Directorios
if(!is_dir('Carlitos')){
  mkdir('Carlitos',0777)or die("No se Pudo Crear la Carpeta.<br/>");
  echo 'La Carpeta a Sido Creada Correctamente.<br/>';
} else {
    echo 'La Carpeta Ya Existe.<br/>';
    if(!file_exists('Carlitos/hola.php')&& !file_exists('Carlitos/holamundo.php')&& !file_exists('Carlitos/carlitos.php')){
        $abrir_Archivos = fopen("Carlitos/hola.php", "a+");
        $abrir_Archivos2 = fopen("Carlitos/holamundo.php", "a+");  
        $abrir_Archivos3 = fopen("Carlitos/carlitos.php", "a+");
    } else {
        echo 'Los Archivos ya an Sido Creados.<br/>';    
    }          
}
//Eliminar Carpetas.
/*if(is_dir('Carlitos')){
    rmdir('Carlitos');
    echo 'La Carpeta a Sido Eliminada.';
}else{
    echo 'La Carpeta no que Intenta Eliminar no Existe.';
}*/
echo '<hr/>';
if(is_dir('Carlitos')){
    if($gestor = opendir('./Carlitos')){
        
        while (False !== ($archivo = readdir($gestor))){
           /* if($archivo == "hola.php"){
                echo "$archivo <br/>";
            }*/
            if($archivo != "." && $archivo != ".."){
                echo $archivo."<br/>";
            }
        }
    }
    
} else {
    echo 'La Carpeta No Existe.<br/>';    
}
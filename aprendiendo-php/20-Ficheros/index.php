
<?php
/*        
//Abrir Archivos
$abrir_Archivos = fopen("fichero_texto.txt", "a+");

//Leer el contenido
while(!feof($abrir_Archivos)){
         $contenido = fgetc($abrir_Archivos);
         if($contenido == "."){             
             echo '-@- <br/>';
         }else{
             echo $contenido;
         }      
        }
//Escribir en el archivo(Sustitullendo el punto)
fwrite($abrir_Archivos, "-@-");       
//Cerrar archivo
fclose($abrir_Archivos);*/

//Copiar Archivos
copy('fichero_texto.txt','fichero_copy.txt') or die("Error en el Copiado");

//Renombrar Ficheros
rename('fichero_copy.txt', 'fichero_renombrado.txt');

//Eliminar Archivos
unlink('fichero_renombrado.txt')or die("Erroar al borrar.");

//Comprobar si un archivo existe

if(file_exists('fichero_renombrado.txt')){
    echo 'El Archivo Existe. ';
} else {
    echo 'El Archivo No Existe.';
}

?>
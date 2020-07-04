<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Cargar imagenes</title>        
    </head>
    <body>
        <h1>Cargar imagenes</h1>
        
        <form action="subir.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit" value="Enviar"/>
        </form>
        
        <h1>Listado de imagenes</h1>
       <?php
       //Abriendo el Directorio.
       $gestor = opendir('./images');
       if($gestor)://Comprobando si esta abierto el directorio
           while (($image = readdir($gestor))!== False)://Recorriendo el directorio
              
               if($image != '.' && $image != '..')://Filtrando los datos residuales                    
                   echo '<table><tr><th>Imagenes</th></tr>'//Imprimiendo en pantalla la tabla con las imagenes
                   . '<tr><td><img src="./images/'.$image
                   .'" style="width:500px;height:600px;"></td></tr></table>';
               endif;
           endwhile;
       endif;
       
       ?>
    </body>
</html>

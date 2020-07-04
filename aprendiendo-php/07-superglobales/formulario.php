<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Escribe tu Nombre"/>
            </p>
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" placeholder="Escribe tu Apellido"/>
            </p>
            <p>
                <label for="edad">Edad</label>
                <input type="text" name="edad" placeholder="Escribe tu Edad"/>
            </p>
            <p>
                <input type="submit" value="Enviar"/>
            </p>
                       
        </form>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


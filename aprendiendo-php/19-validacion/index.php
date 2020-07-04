<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP</title>
    </head>
    <body>
        <h1>Formulario PHP</h1>
        
        
        <?php
        if(!empty($_GET['error'])){
        $error = $_GET['error'];
        
        if($error == 'faltan_datos'){
            echo '<strong style="color:red">Falstan datos</strong>';
        }
        }
        ?>
        <form action="procesar_formulario.php" method="POST">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Digita tu nombre" required="required" pattern="[A-Za-z]+"/>
            </p>
            <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" placeholder="Digita tu apellido" required="required" pattern="[A-Za-z]+"/>
            </p>
            <p>
            <label for="edad">Edad</label>
            <input type="number" name="edad" placeholder="Digita tu edad" pattern="[0-9]+"/>
            </p>
            <p>
            <label for="emal">Correo</label>
            <input type="email" name="email" placeholder="Digita tu e-mail" required="required"/>
            </p>
            <p>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" placeholder="Digita tu contraseña" required="required" />
            </p>
            <p>
                <input type="submit" value="Enviar"/>
            </p>
        </form>
    </body>
</html>
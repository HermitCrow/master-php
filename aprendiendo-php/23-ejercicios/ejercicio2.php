<?php
/*
Ejercicio 2. 
*1. Una Funcion 
*2. Validar un email con filter_var
*3. Recoger variables por get y validarlas
*43 Mostrar Resultador
 */
//Funcion que valida un email.
function validar_Email($email){
    $ESTATUS="El email no es Valido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $ESTATUS=" El email es Valido";
    }
    return $ESTATUS;
}
/**************************************************************************************/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Validar un email usando una funcion.</h1>
    <form method="get" action="ejercicio2.php"><!--Formulario que Captura el email.-->
        <div>
            <label for="email">Email</label>
            <input type="email" name="email"/>
            <input type="submit" value="Enviar"/>
        </div> 
    </form>
    <hr/>
    <h2>
        <?php  
        //Llamando la fucion para validar el email.      
        if(isset($_GET['email'])){    
           echo validar_Email($_GET['email']);
           header("Refresh: 5; URL=ejercicio2.php");//redireccionado la pagina despues de 5 segundos
       }else{
           echo 'Error. No es un Email digita un email.';
       }
        ?>
    </h2>
</body>
</html>
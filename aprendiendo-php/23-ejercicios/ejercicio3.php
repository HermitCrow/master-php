<?php
/*
*Ejercicio 3. Hacer una interfas de usuario(formulario) con dos input y cuatro botones
*una para sumar, restar, Multiplicar y dividir.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="ejercicio3.php"><!-- Formulario para simular la calculador -->
        <div>
            <label for="valor1">Numero 1</label><br/>
            <input type="number" name="valor1"/><br/><br/>
            <label for="valor2">Numero 2</label><br/>
            <input type="number" name="valor2"/>
        </div>
        <br/>
        <br/>
        <div>
            <input type="submit" name="suma" value="+"/>        
            <input type="submit" name="resta" value="-"/>
            <input type="submit" name="multi" value="*"/>
            <input type="submit" name="divir" value="/"/>
        </div>
    </form>
    <br/>
    <br/>
    <h1>
    <?php
        //If para confirmar que las variables no esta vacias 
        if(!empty($_POST['valor1']) && !empty($_POST['valor2'])):
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            if(isset($_POST['suma']) == '+'){//If para ejecutar la Suma
                echo $valor1 + $valor2;
            }elseif(isset($_POST['resta']) == '-'){//If para ejecutar la Resta
                echo $valor1 - $valor2;
            }elseif(isset($_POST['multi']) == '*'){//If para ejecutar la Multiplicacion
                echo $valor1 * $valor2;
            }elseif(isset($_POST['divir']) == '/'){//If para ejecutar la Divicion
                echo $valor1 / $valor2;
            }else{
                echo "Error.";//error
            }
                  
        endif;
    
    ?>
    </h2>
</body>
</html>
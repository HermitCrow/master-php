<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form method="post">
            <P>
                <input type="text" name="valor1" placeholder="Digita el primer valor "/>
            </P>
            <p>
                <input type="text" name="valor2" placeholder="Digita el segundo valor"/>
            </p>
            <p>
                <input type="submit" value="+" name="suma"/>
                <input type="submit" value="-" name="resta"/>
                <input type="submit" value="*" name="multi"/>
                <input type="submit" value="/" name="divi"/>
            </p>
            <?php 
            //echo count ($_POST);
                 if(!empty($_POST['valor1'])&&!empty($_POST['valor2'])){                    
                    $dato = 0;
                        
                            if(isset($_POST['suma']) == "+"){                                
                                     //$dato = $_POST['suma'];                                
                                     $dato = 1;                                
                                }elseif (isset($_POST['resta']) == "-") {
                                     //$dato = $_POST['resta'];                                
                                     $dato = 2; 
                                }elseif (isset($_POST['multi']) == "*") {
                                     $dato = 3; 
                                }elseif (isset($_POST['divi']) == "/") {
                                     $dato = 4; 
                                }
                            
                            switch($dato){
                                   case 1:
                                           echo '<p><label>';
                                           echo ($_POST['valor1'] + $_POST['valor2']);
                                           echo "</label></p>";
                                           break;
                                    case 2:
                                           echo '<p><label>';
                                           echo ($_POST['valor1'] - $_POST['valor2']);
                                           echo "</label></p>";
                                           break;
                                    case 3:
                                           echo '<p><label>';
                                           echo ($_POST['valor1'] * $_POST['valor2']);
                                           echo "</label></p>";
                                           break;
                                    case 4:
                                           echo '<p><label>';
                                           echo ($_POST['valor1'] / $_POST['valor2']);
                                           echo "</label></p>";
                                           break;   
                                    default :
                                           echo 'no es una Opcion';
        
                 }}
            
            
            ?>
        </form>
    </body>
</html>






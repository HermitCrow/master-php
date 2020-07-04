<!DOCTYPE HTML>
<html>
    <head>
        <title>Manejo de variables</title>
        <link rel="stylesheet" href="../Style/Bootstrap/css/bootstrap.min.css" />
        
        <script src="https://kit.fontawesome.com/eadb8cdf1b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Calcula dos Numeros</h1>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <form method="post">
                    <div class="form-group">
                        <label for="numero1" class="control-label">Primer Nuemro</label>
                        <input type="text" name="numero1" placeholder="Digita el valor 1 aqui" class="form-control"/> 
                    </div>
                    <div class="form-group">
                        <label for="numero2" class="control-label">Segundo Numero</label>
                        <input type="text" name="numero2" placeholder="Digita el valor 2 aqui" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Calcular" class="btn btn-primary"/>
                    </div>
                    
                </form>
            </div>
        </div>
        <?php
              if(!empty($_POST['numero1'])&&!empty($_POST['numero2'])){
             
               $octenervalor = $_POST["numero1"] + $_POST['numero2'];
               
              echo "</br><hr> La suma de ".$_POST['numero1']." + ".$_POST['numero2']." = ".$octenervalor;
              } 
                                          
            ?>
    </body>
    
</html>




<?php

/* 
 * Muestra todos los numeros entre dos numeros 
 * que nos llegen por la url por get
 */

if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
     for($c = 0;$c <= $numero2;$c++)
       {
           if($numero1 < $c && $numero2 > $c){echo "<h1>$c</h1>";}
           
       } 
   
}else {
    echo "<h1>NO hay datos enviados</h1>";   
}
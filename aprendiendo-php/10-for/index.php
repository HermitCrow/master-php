<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$resultado = 0;

for($c = 0;$c <= 100;$c++){
    //echo $c."C<hr/>";
    //echo $resultado."R<hr/>";
    $resultado += $c;
    echo $resultado."<br/>";
    
}
echo '<h1>El resultado es:'.$resultado.'</h1>';

echo '<hr>';

if(isset($_GET['numero'])){
    //combiar tipo de dato
    $numero = (int)$_GET['numero'];
    
}else{
    $numero = 1;
    
}

echo "<h1>Tabla de Multiplicar del numero $numero</h1>";
;
for ($nume1 = 1;$nume1 <= 12;$nume1++){
    if($numero == 45){
        echo 'No se muestra el 45';
        break;
    }
    
    echo "$numero X $nume1 = ".($numero*$nume1)."<br/>";
    
    
}
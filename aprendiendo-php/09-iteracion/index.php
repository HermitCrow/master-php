<?php

/* 
 * bucle while
 * Es una estrectura de comtrol que itera o 
 * repite la ejecucion de una serie de instruciones cuantas 
 * veces sean nesesaria en base a una condicion dada.
 * //WHILE
 * while (condicion){
 * intrucion.
 * }
 * 
 * //DO WHILE
 * do{
 * 
 * intrucion
 * }while (condicion)
 * 
 * //FOR
 * 
 * for($c = 0;$c<= 5;$c++){
 * intrucion
 * }
 */

$numero = 1;

while ($numero <= 100){
    
    echo $numero;
    
    if($numero !== 100){
        echo ', ';
        
    }
    $numero++;
}
echo '<hr>';
if(isset($_GET['numero'])){
    //combiar tipo de dato
    $numero = (int)$_GET['numero'];
    
}else{
    $numero = 1;
    
}

echo "<h1>Tabla de Multiplicar del numero $numero</h1>";
$nume1 = 1;
while ($nume1 <= 12){
    
    echo "$numero X $nume1 = ".($numero*$nume1)."<br/>";
    
    $nume1++;
}
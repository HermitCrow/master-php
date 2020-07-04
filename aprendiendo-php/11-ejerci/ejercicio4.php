<?php

/* 
 *Recojer dos numero por el parametro get y 
 * hacer una suma, una resta, una multiplicacion y una divicion.
 */


if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo "<p>$numero1 + $numero2 = ".($numero1 + $numero2)."</p>";
    echo "<p>$numero1 - $numero2 = ".($numero1 - $numero2)."</p>";
    echo "<p>$numero1 * $numero2 = ".($numero1 * $numero2)."</p>";
    echo "<p>$numero1 / $numero2 = ".($numero1 / $numero2)."</p>";
} else {
    echo "<h1>NO hay datos enviados</h1>";   
}
<?php

/* 
 *Hacer un programa que compruebe si una variable esta vacia y si lo esta rellenarlo
 * con texto en minuscula y maostrarlo en mayuscula y en negrita.
 */

if(isset($_GET['texto'])){
$texto = $_GET['texto'];

if(empty($texto)){
    $texto = "hola soy goku";
    echo '<font size="20" color="orange"><strong>'.strtoupper($texto).'</strong></font>';
    
} else{    echo '<h1><font color="green">Este es tu texto. >></font><font color="blue"> '.$texto.'</font></h1>';}
}else{    echo '<h1><font color="red">La variable no esta definida.</font></h1>';}
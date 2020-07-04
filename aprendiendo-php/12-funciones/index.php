<?php

/* 
 *Funciones son un conjunto de ordenes 
 * agrupado por un nombre concreto
 */

function ver_peliculas(){
    
    echo 'Emmanuel';
}//final de la funcion ver_peliculas

//invocar funcion
//ver_peliculas();


//ejemplo 2
/*function tabla($numero){
    echo "<h1>Tabla del $numero </h1><br/>";
    for($c=1;$c <= 12; $c++){
        echo "$numero X $c = ".($numero * $c)."<br/>"; 
        
    }
}

if(isset($_GET['numero'])){
tabla($_GET['numero']);
} else {
    echo '<h3>No hay numeros para multiplicar.</h3>';
}*/

//Ejercicio 3

function calcular($numero1,$numero2,$negrita = false){
    //Conjunto de intrucciones.
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divi = $numero1 / $numero2;
    $cadena ="";
    if($negrita != false){
         $cadena .= "<h1>"; 
        
    }
    $cadena .= "Suma: $suma <br/>";
    $cadena .= "Resta: $resta <br/>";
   $cadena .=  "Multiplicasion: $multi <br/>";
    $cadena .=  "Divicion: $divi <br/>";
    $cadena .= '<hr/>';
   if($negrita != false){
        $cadena .= '</h1>'; 
        
    }
    return $cadena;
}

/*if(isset($_GET['numero1']) && isset($_GET['numero2'])){
calcular($_GET['numero1'], $_GET['numero2']);
} else {
    echo '<h3>No hay numeros para Calcular.</h3>';
}*/
echo calcular(50,58);
echo calcular(15,45,true);
echo calcular(60,21);

//ejemplo 4
function getnombre($nombre){
    $cadenaTd ="El numbre es: $nombre ";
    return $cadenaTd;
}

function devuelveElnombre($nombre,$apellido){
    $cadenaTx = getnombre($nombre)
            . "<br/>"
            . "El Apellido es: $apellido ";
    return $cadenaTx ;
}

echo devuelveElnombre("Martin","Ulloa");
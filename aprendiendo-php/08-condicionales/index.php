<?php

/*
 * Condicionales
 * IF:
 *    if(Condicion){
 *        Intruciones 
 *        } else{Otra condicion}
 * 
 * //Operadores de Comparacion
 * 
 * == igual
 * === identico
 * !=  diferente
 * <> diferente
 * !== no identico
 * <   menor que
 * >   mayor que
 * <=  menor o igual que
 * >=  mayor o igual que
 * 
 * //Operadores Logicos
 * && AND Y
 * || OR O
 * ! NOT NO
 */
$color ='rojo';
//If de control
if($color == 'rojo'){
    //Variable que carga la barra de control
    $color = '█';
    //Inicio del for que llenar areglo de la barra de carga
    for ($c=0;$c <= 20;$c++){ 
                             $colora[$c]=$color; 
                             
                            } //Fin for llenar areglo de la barra de carga    
      //Imprimiendo el color rojo
    echo '<font color="red"><h1>';
    //Imprminiendo el texto
    echo 'El color es '; 
          //Inicio del For que inprimir barra de carga
          for ($i=0;$i <= 20;$i++){
                                   echo $colora[$i];    
                                 }//Fin for inprimir barra de carga
    echo (--$i).'%</h1></font><hr>';//Fin de la etiquetas HTML 
    //var_dump($colora);
}else{    echo 'El color no es rojo';}
//ejemplo 2
 $year = 2028;
  if ($year != 2019){
      echo '<h2>Es un año diferente 2019</h2><hr>';
  }else{      echo 'Es un año anterio a '.$year.'<hr>';}
  
  //ejemplo 3
  $nombre = 'David';
  $edad = 25;
  $mayoria = 18;
  if($edad >= $mayoria){
      echo "<h1>$nombre es mayor de edad.</h1><hr>";
  } else {echo "<h1>$nombre No es mayor de edad.</h1><hr>";}
  
  // else if ejemplo 4
  
  $dia = 4;
  
  if($dia == 1){
      echo 'Es Lunes';
} elseif ($dia == 2) {
      echo 'Es Martes';      
}elseif ($dia == 3) {
      echo 'Es Miercoles';   
}elseif ($dia == 4) {
      echo 'Es Jueves';
}elseif ($dia == 5) {
      echo 'Es Viernes';
}elseif ($dia == 6) {
      echo 'Es Sabado'; 
} else {
      echo 'Es Domingo';
} echo '<hr>';
// ejemplo 5

$edad1 = 19;
$edad2 = 64;
$edadof = 70;
if($edadof >= $edad1 && $edadof <= $edad2){
    echo 'Tu edad es {'. $edadof .'} Esta en edad para trabajar';
} elseif ($edadof <= $edad1) {
    echo 'Tu edad es {'. $edadof .'} Por lo que no puedes Trabajar';
}else {
    echo 'Tu edad es {'. $edadof .'} Por lo que ya eres demasiado mayo para Trabajar';
} 
echo '<hr>';
//ejemplo 6

$semana = 8;

switch($semana){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
    default :
        echo 'Los dias de la semano son solo 7';
        
}

//ejemplo 7 GOTO
goto marca;
echo "<h2>Emmanuel</h2>";
echo "<h2>Edward</h2>";
echo "<h2>Carlitos</h2>";
    
marca:
echo '<h1>me he saltado</h1>';
    


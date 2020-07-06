<?php
//Conectar a las base de datos 

$ServerName = "LAPTOP-J533FSR0";
$ConnectionString = array("Database"=>"PhpWithSqlSV","UID"=>"sa","PWD"=>"123456");
$Connection = sqlsrv_connect($ServerName,$ConnectionString);

//Comprobar si la Conexion es exitosa.

if($Connection){
    echo "Connection Success.";    
   
    }else{
    echo "Connection Error.";
    die(Print_r(sqlsrv_errors(), true));
    }

//Consulta para configurar la codificacion de caracteres

//sqlsrv_query($Connection,"SET NAMES 'uft8'");

//Sql Server Connection query
//$sql = "select * from Notas";
//$resultado=sqlsrv_query($Connection,$sql);
//if($resultado === false){
//    die(Print_r(sqlsrv_errors(), TRUE));
//}

$sql = "SELECT * FROM Notas";
$resultado=sqlsrv_query($Connection,$sql);

if($resultado === false)
    die(Print_r(sqlsrv_errors(), TRUE));
$productCount = 0; 
//echo "<table>" ;
//while($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC))  
//{  
  //  echo $row['Title'].",". $row['Descriptions'];  
    //echo("<br/>");  
    //$productCount++;  
//} 

//sqlsrv_free_stmt($resultado); 
//echo "</table>" ;  

var_dump($resultado); 

?>
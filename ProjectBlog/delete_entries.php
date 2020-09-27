<?php

    //Connection to the database.
    require_once 'Include/connection.php';
    if(isset($_SESSION['User']) && isset($_GET['Id_Input'])){
        $Id_Input=$_GET['Id_Input'];
        $Id_User=$_SESSION['User']['Id'];
        $sql="DELETE FROM Inputs WHERE Id = $Id_Input AND Id_Users = $Id_User";
        $query = sqlsrv_query($DataContext,$sql);
       
        
        if($query){
            header('Location:index.php');
        }else{
            header("Location: Input.php?Id=$Id_Input"); 
        }
    }
    header('Location:index.php');
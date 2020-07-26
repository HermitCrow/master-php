<?php
require_once 'Include/connection.php';
require_once 'Include/helpers.php'; 

if(isset($_GET)){
    $Categories = GetCategory($DataContext);
    $Id = false;
        while($Category = sqlsrv_fetch_array($Categories, SQLSRV_FETCH_ASSOC)){ 
        if($_GET['Id'] == $Category['Id']){
            $Id = $Category['Id'];
            $Category_Type = $Category['Names'];
        }
    } 
    if($Id){
        echo $Category_Type;
    }else{
        header('Location: index.php');
    }
    
}else{
    header('Location: index.php');
}
<?php
require_once 'Include/helpers.php';
require_once 'Include/connection.php';

if(isset($_POST)){

    $IdUser = isset($_POST['Id_Users']) ? (int)$_POST['Id_Users'] : false;
    $IdCategory = isset($_POST['Category']) ? (int)$_POST['Category'] : false;
    $Title = isset($_POST['Title']) ? sqlsrv_escape($_POST['Title']) : false;
    $Descriptions = isset($_POST['Descriptions']) ? $_POST['Descriptions'] : false;    

    $errors = Array();

    if(!empty($Title)  && !is_numeric($Title) && $Title !== false){
        $Title_validate = true;
    }else{

        $Title_validate = false;
        $errors['Title'] ="The Title is not valid or empty.";
    }

    if(!empty($Descriptions)){
        $Descriptions_validate = true;
        
    }else{

        $Descriptions_validate = false;
        $errors['Descriptions'] ="The Descriptions is empty.";
    }

    if(count($errors) == 0){
        
        

        
        $sql="INSERT INTO Inputs
        VALUES($IdUser, $IdCategory, '$Title', '$Descriptions', SYSDATETIME())";        
        $query = sqlsrv_query($DataContext,$sql);
       //var_dump($sql);
       //var_dump($DateCom);
        //die();
        
        if($query){
            header('Location:index.php');
        }else{
            header('Location: create_entrada.php'); 
        }
        
    }else{

        $_SESSION['errors'] = $errors;              
        header('Location: create_entrada.php'); 
    }
}
<?php

if(isset($_POST)){

require_once 'Include/helpers.php';
require_once 'Include/connection.php';

    $IdUser = isset($_POST['Id_Users']) ? (int)$_POST['Id_Users'] : false;
    $IdInput = isset($_POST['Id_Input']) ? (int)$_POST['Id_Input'] : false;
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

        $sql="UPDATE Inputs
        SET Title ='$Title',Descriptions ='$Descriptions',Id_Category =$IdCategory,InputDate =SYSDATETIME()
        WHERE Id_Users = $IdUser AND Id = $IdInput";
               
        $query = sqlsrv_query($DataContext,$sql);
        
        if($query){
            header('Location:index.php');
        }else{
            header("Location: edit_entries.php?Id_Input=$IdInput"); 
        }
        
    }else{

        $_SESSION['errors'] = $errors;              
        header("Location: edit_entries.php?Id_Input=$IdInput"); 
    }
}
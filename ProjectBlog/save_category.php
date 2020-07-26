<?php
require_once 'Include/connection.php';
function sqlsrv_ecape($data){
    if(is_numeric($data)){
        return false;
    }
    $databuscar = array('"',"'","/");
    $datarenpla = array('""',"''","//");
    $datamo = str_replace($databuscar,$datarenpla,$data);
     if(strcasecmp($data,$datamo) !== 0){         
         $data = false;         
     }    
    return $data;
}
if(isset($_POST) && !empty($_POST['CategoryName']) == " "){

    if(sqlsrv_ecape($_POST['CategoryName']) == false){
        $_SESSION['Error_Category_Name'] = "The name Category not valid.";               
        header("Location: create_category.php");
    }else{
        $Category = isset($_POST['CategoryName']) ? $_POST['CategoryName'] : false;
        $sql="INSERT INTO Category VALUES(?)";
        $params = array($Category);
        $query = sqlsrv_query($DataContext,$sql,$params);
        if($query){
            $_SESSION['Complete_Category'] = "The register is complete.";
            header("Location: create_category.php");
        } else{
            $_SESSION['Error_Category_Name'] = "Error saving to the database."; 
            header("Location: create_category.php");
        }       
         
    }

    
}else{
    $_SESSION['Error_Category_Name'] = "The name category is empty.";
    header("Location: create_category.php");
}
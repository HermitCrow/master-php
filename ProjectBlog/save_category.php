<?php
//Check if the post exists or is empty.
if(isset($_POST) && !empty($_POST) == " "){   

    //Connection to the database.
require_once 'Include/connection.php';

//Function to escape charater
require_once 'Include/helpers.php';

    //Calls the function passes a value to verify it.
   
   if(sqlsrv_escape($_POST['CategoryName']) == false || preg_match("/[1-9]/",$_POST['CategoryName']) || is_numeric($_POST['CategoryName'])){

        //Create the error The name Category not valid.
        $_SESSION['Error_Category_Name'] = "The name Category not valid."; 

        //redirects to the create_category page             
        header("Location: create_category.php");
    }else{
        //Check if the post CategoryName exists
        $Category = isset($_POST['CategoryName']) ? $_POST['CategoryName'] : false;

        //Create query to sql server whit use params.
        $sql="INSERT INTO Category VALUES(?)";
        $params = array($Category);

        //Insert CategoryName In the table Category in the database Blog.
        $query = sqlsrv_query($DataContext,$sql,$params);

        //check if the query was successful.
        if($query){
            //Create the message that the record is complete.
            $_SESSION['Complete_Category'] = "The register is complete.";
            header("Location: create_category.php");
        } else{
            //Create the error message when saving the data.
            $_SESSION['Error_Category_Name'] = "Error saving to the database."; 
            header("Location: create_category.php");
        }       
         
    }

    
}else{
    //Create the error message the category name is empty.
    $_SESSION['Error_Category_Name'] = "The name category is empty.";
    header("Location: create_category.php");
}
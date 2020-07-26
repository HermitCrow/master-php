<?php 
function MostrarErrors($errors, $campo){
    
    $alert = '';
    if(isset($errors[$campo]) && !empty($campo)){
        $alert = "<div class='alert alert-error'>".$errors[$campo]."</div>";
    }
    
    return $alert;
}

function BorraErrors(){
      if(isset($_SESSION['errors'])){
        $_SESSION['errors'] = null;    
        unset($_SESSION['errors']);
      }
    

    if(isset($_SESSION['complete'])){
        $_SESSION['complete'] = null;
        unset($_SESSION['complete']);  
    }

    if(isset($_SESSION['Error_login'])){
        $_SESSION['Error_login'] = null;
        unset($_SESSION['Error_login']);
    }

    if(isset($_SESSION['Error_Category_Name'])){
        $_SESSION['Error_Category_Name'] = null;
        unset($_SESSION['Error_Category_Name']);
    }

    if(isset($_SESSION['Complete_Category'])){
        $_SESSION['Complete_Category'] = null;
        unset($_SESSION['Complete_Category']);  
    }
}

function GetCategory($DataContext){
    $sql = "SELECT * FROM Category ORDER BY Id ASC";
    $params = array();
    $options = array("Scrollable" => SQLSRV_CURSOR_CLIENT_BUFFERED);
    $getCategory = sqlsrv_query($DataContext,$sql,$params,$options);
    $Category = array();
    if($getCategory && sqlsrv_num_rows($getCategory) >= 1){
         $Category = $getCategory;
        
    }
    return $Category;
}

function GetInputs($DataContext){
    $sql = "SELECT TOP 4 i.*, c.Names AS 'Category',CONCAT(u.FirstName,' ',u.LastName) AS 'NameFull' FROM Inputs i 
    INNER JOIN Category c ON c.Id = i.Id_Category
    INNER JOIN Users u ON u.Id = i.Id_Users
    ORDER BY i.Id DESC";
    $params = array();
    $options = array("Scrollable" => SQLSRV_CURSOR_CLIENT_BUFFERED);
    $GetInput = sqlsrv_query($DataContext,$sql,$params,$options);    
    $Input = array();

    if($GetInput && sqlsrv_num_rows($GetInput) >= 1){
        $Input = $GetInput;
    }

    return $Input;
}
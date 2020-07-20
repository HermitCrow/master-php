<?php
 
function MostrarErrors($errors, $campo){
    
    $alert = '';
    if(isset($errors[$campo]) && !empty($campo)){
        $alert = "<div class='alert alert-errors'>".$errors[$campo]."</div>";
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
    
}
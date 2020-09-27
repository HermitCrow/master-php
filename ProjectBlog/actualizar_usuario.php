<?php
function sqlsrv_escape($data){
    if(is_numeric($data)){
        return $data;
    }
    $databuscar = array('"',"'");
    $datarenpla = array('""',"''");
    $data = str_replace($databuscar,$datarenpla,$data);    
    return $data;
}
if(isset($_POST['submit'])){

    //Includes
    require_once 'Include/connection.php';
    //session_start();    

    //Recoger los valores del formulario de registro.
    $firstname = isset($_POST['firstname']) ? sqlsrv_escape($_POST['firstname']) : false;
    $lastname = isset($_POST['lastname']) ? sqlsrv_escape($_POST['lastname']) : false;
    $email = isset($_POST['email']) ? trim($_POST['email']) : false;
    $IdUser = isset($_POST['Id_Users']) ? (int)$_POST['Id_Users'] : false;
   
    
    //Array errores
    $errors = Array();
    //validar lod datos antes de guardar
    
    //Validar campo nombre.
    if(!empty($firstname) && !is_numeric($firstname) && !preg_match("/[0-9]/", $firstname)){        
        
        $name_validate = true;
        
    }else{

        $name_validate = false;
        $errors['firstname'] ="The firstname is not valid";
    }
    //Validar el campo apellido.
    if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)){        
        
        $lastname_validate = true;
        
    }else{

        $lastname_validate = false;
        $errors['lastname'] ="The lastname is not valid";

    }
    //Validar campo email.
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){        
       
        $email_validate = true;
        
    }else{

        $email_validate = false;
        $errors['email'] ="The email is not valid";

    }
    
    $save_users = false;    
    if(count($errors) == 0){  

        $save_users = true;
        $sql="SELECT Id,Email From Users where Email ='$email'";
        $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_CLIENT_BUFFERED);
        $isset_email= sqlsrv_query($DataContext,$sql,$params,$options);
        $isset_user=sqlsrv_fetch_array($isset_email, SQLSRV_FETCH_ASSOC);
        if($isset_user['Id'] == $IdUser || empty($isset_user)){
            
            //Insertar usuario
            $firstname = strtoupper($firstname);
            $lastname = strtoupper($lastname);
            $sql = "UPDATE Users 
            SET FirstName ='$firstname',LastName='$lastname',Email='$email'
            WHERE Id = $IdUser";
            $save = sqlsrv_query($DataContext,$sql);  
            

            if($save){
                $_SESSION['User']['FirstName'] = $firstname;
                $_SESSION['User']['LastName'] = $lastname;
                $_SESSION['User']['Email'] = $email;

                $_SESSION['complete'] = "The actualizer is complete.";
                header('Location:mis_datos.php');

            }else{
                
                $_SESSION['errors'] ['general'] = "Error, user save failed"; 
                header('Location:mis_datos.php');    
            }
        }else{
            $_SESSION['errors'] ['general'] = "Error, the user already exists"; 
                header('Location:mis_datos.php');
        }    
    }else{

        $_SESSION['errors'] = $errors;  
        header('Location:mis_datos.php');     
    }
}
<?php
function sqlsrv_ecape($data){
    if(is_numeric){
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
    $firstname = isset($_POST['firstname']) ? sqlsrv_ecape($_POST['firstname']) : false;
    $lastname = isset($_POST['lastname']) ? sqlsrv_ecape($_POST['lastname']) : false;
    $email = isset($_POST['email']) ? trim($_POST['email']) : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    
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
    //Validar el campo cantraseña
    if(!empty($password)){        
        
        $password_validate = true;
        
    }else{

        $password_validate = false;
        $errors['password'] ="The password is empty";

    }
    $save_users = false;    
    if(count($errors) == 0){  

        $save_users = true;

        //Cifrar la password
        $password_save = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        
         //Insertar usuario
         $firstname = strtoupper($firstname);
         $lastname = strtoupper($lastname);
        $sql = "INSERT INTO Users VALUES('$firstname','$lastname','$email','$password_save',SYSDATETIME())";
        $save = sqlsrv_query($DataContext,$sql);   

        if($save){
            $_SESSION['complete'] = "The register is complete.";
        }else{
            $_SESSION['errors'] ['general'] = "Error, user save failed";    
        }
        
    }else{

        $_SESSION['errors'] = $errors;       
    }
}

header('Location:index.php');
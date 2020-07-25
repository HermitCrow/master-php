<?php

//Connection tu the database and start session.
require_once 'Include/connection.php';

if(isset($_POST)){

    $email = isset($_POST['email']) ? trim($_POST['email']) : false;
    $password = isset($_POST['password']) ? trim($_POST['password']) : false;


    //Consulta para conprobar las credenciales del usuario
    $sql = "SELECT * FROM Users WHERE Email= ?";
    $params = array($email);
    $options =  array( "Scrollable" => SQLSRV_CURSOR_CLIENT_BUFFERED );
    $login = sqlsrv_query($DataContext,$sql,$params,$options);

    if($login && sqlsrv_num_rows($login) == 1){
        $users = sqlsrv_fetch_array($login, SQLSRV_FETCH_ASSOC);      
    
        //Comprobar la contraseña /cifrar 
        $verify = password_verify($password,$users['PasswordUs']);
        
        if($verify){
            //Utilizar una sesion para guardar los datos del usuarion logueado
            $_SESSION['User'] = $users;
        }else{
            
            //Mostrar una sesion con el fallo
            $_SESSION['Error_login'] = "User o Password Incorret.";

        }
    }else{

       // if(isset($_SESSION['User'])){
        //    unset($_SESSION['User']);                        
      //  } 
        //Mensaje de error
        $_SESSION['Error_login'] = "User o Password Incorret.";
    }
}
header('Location: index.php');
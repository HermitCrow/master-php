<?php

require_once 'Models/usuario.php';
class usuarioController {

    public function index() {
        echo "Controlador Usuario, Accion index";
    }

    public function registro() {
        require_once 'Views/usuarios/registro.php';
    }

    public function save() {
        if (isset($_POST['sibmit'])) {

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            $errors = array();
            //validar lod datos antes de guardar
            //Validar campo nombre.
            if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[1-9]/", $nombre)) {
                $nombre_validate = true;
            } else {

                $nombre_validate = false;
                $errors['nombre'] = "El nombre no es valido";
            }
            //Validar campo Apellidos.
            if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[1-9]/", $apellidos)) {
                $apellidos_validate = true;
            } else {
                $apellidos_validate = false;
                $errors['apellidos'] = "Los apellidos no son valido";
            }

            //Validar el campo email
            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_validate = true;
            } else {
                $email_validate = false;
                $errors['email'] = "El email no es valido";
            }

            //Validar el campo password
            if (!empty($password)) {
                $password_validate = true;
            } else {
                $password_validate = false;
                $errors['password'] = "La contraseña esta vacia";
            }

            //Validar campos antes de enviar ala base de datos

            if (count($errors) == 0) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save = $usuario->save();

                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {

                    $_SESSION['register'] = "failed";
                }
            } else {

                $_SESSION['register'] = "failed";
            }
        } else {

            $_SESSION['register'] = "failed";
        }
        header("Location:" . base_url . 'usuario/registro');
    }

    public function loginIn() {
        if (isset($_POST['loginIn'])) {

            //Identificar el usuario
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            $password = isset($_POST['password']) ? trim($_POST['password']) : false;

            $Usuarios = new Usuario();
            $Usuarios->setEmail($email);
            $Usuarios->setPassword($password);
            //Consultar la base de datos
            $identity = $Usuarios->login();

            //Crear una sesion
            if ($identity && is_object($identity)) {
                $_SESSION['login'] = $identity;
                
                if($identity->Rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
                
            } else {
                $_SESSION['error_login'] = "Usuario o Contraceña Incorrecta.";
            }
        }
        header("Location:" . base_url);
    }

    public function LoginOut() {

        //Cerrar Seccion usuario
        if (isset($_SESSION['login']) || isset($_SESSION['admin'])) {
            Utils::deleteSession('carrito');
            Utils::deleteSession('login');
            Utils::deleteSession('pedido');
            Utils::deleteSession('admin');
            Utils::deleteSession('error_login');
        }
        
        //Cerrar Seccion administrador
//        if(isset($_SESSION['admin'])){
//            Utils::deleteSession('carrito');
//            Utils::deleteSession('admin');
//            Utils::deleteSession('pedido');
//        }
        
        
        header("Location:" . base_url);
    }

}//Fin de la clase

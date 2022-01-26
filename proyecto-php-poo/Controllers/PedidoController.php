<?php

require_once 'Models/pedido.php';

class PedidoController {

    public function hacer() {
        require_once 'Views/pedido/hacer.php';
    }

    public function add() {
        if (isset($_SESSION['login'])) {
            //redirigir Guardar en la base de datos


            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $usuario_id = isset($_POST['usuario_id']) ? $_POST['usuario_id'] : false;

            $stats = Utils::statCarrito();
            $coste = $stats['total'];
            if ($provincia && $localidad && $direccion && $usuario_id) {
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);
                //var_dump($pedido);
                $save = $pedido->save();

                //Guardar linea pedido
                $save_liena = $pedido->save_linea();

                if ($save && $save_liena) {
                    $_SESSION['pedido'] = "Complet";
                    Utils::deleteSession('carrito');
                    echo "Compledato correctamente";
                } else {
                    $_SESSION['pedido'] = "failed";
                    echo "Error al guardar";
                }
            } else {
                $_SESSION['pedido'] = "failed";
            }

            //redirigir a vista confirmar
            header("Location:" . base_url . 'pedido/confirmado');
        } else {
            //redirigir al index
            header("Location:" . base_url);
        }
    }

    public function confirmado() {
        Utils::isIdentity();
        $user = $_SESSION['login'];
        $pedido = new Pedido();
        $pedido->setUsuario_id($user->Id);
        $pedido = $pedido->getOneByUser();
        $pedido_producto = new pedido();
        $productos = $pedido_producto->getProductoByPedidos($pedido->Id);

        require_once 'Views/pedido/confirmado.php';
    }

    public function mis_pedidos() {
        Utils::isIdentity();
        $userId = $_SESSION['login']->Id;
        $pedido = new Pedido();

        //Obteniendo los pedidos del usuario

        $pedido->setUsuario_id($userId);
        $pedidos = $pedido->getAllByUser();
        require_once 'Views/pedido/mis_pedidos.php';
    }

    public function detalle() {
        Utils::isIdentity();
        if (isset($_GET['Id'])) {
            $pedidoId = $_GET['Id'];  //Capturando mi Id que llega por la url         
            $pedido = new Pedido(); // Instanciando mi clase pedido
            $pedido->setId($pedidoId); //Enviando el Id que llega por la url a la clase pedido
            // Validado el Id que llega por la URL, exista en la base de datos
            $pedidoIdValid = $pedido->isIdValid();
            if ($pedidoIdValid->num_rows != 0) { //Validando que el reques sea Diferente de 0   
                //Obteniendo los pedidos del usuario            
                $pedidos = $pedido->getOne();
                //Obteniendo los Productos del usuario
                $pedido_producto = new pedido();
                $productos = $pedido_producto->getProductoByPedidos($pedidos->Id);
                require_once 'Views/pedido/detalle.php';
            } else {
                header('Location:' . base_url . 'pedido/error');
            }
        } else {
            header('Location:' . base_url . 'pedido/mis_pedidos.php');
        }
    }

    public function gestion() {
        Utils::isAdmin();
        $gestion = true;
        $pedido = new Pedido(); // Instanciando mi clase pedido
        $pedidos = $pedido->getAll();
        require_once 'Views/pedido/mis_pedidos.php';
    }

    public function editiStatus() {
        Utils::isAdmin();
        if (isset($_POST['status']) && isset($_POST['Id'])) {
            $status = $_POST['status'];
            $pedidoId = $_POST['Id'];
            $pedido = new pedido();
            $pedido->setId($pedidoId);
            $pedido->setEstado($status);
            $resultQuery = $pedido->updateStatus();
            $pedidos = $pedido->getAll();
            if ($resultQuery) {
                $_SESSION['crear'] = "complete";
            } else {
                $_SESSION['crear'] = "failed";
            }
            require_once 'Views/pedido/mis_pedidos.php';
        } else {
            header('Location:' . base_url . 'pedido/error');
        }
    }

}

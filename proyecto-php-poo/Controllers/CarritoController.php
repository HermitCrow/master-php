<?php

require_once 'Models/producto.php';

class carritoController {

    public function index() {
        $carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : null;        
        require_once 'Views/carrito/ver.php';
    }

    public function add() {
        if (isset($_GET['id'])) {
            $producto_id = trim($_GET['id']);
            if (isset($_SESSION['carrito'])) {
                $counter = 0;
                foreach ($_SESSION['carrito'] as $indice => $dato) {
                    if ($producto_id == $dato['producto']->Id) {
                        $_SESSION['carrito'][$indice]['unidad']++;
                        $counter++;
                    }
                }
            }
            if (!isset($counter) || $counter == 0) {

                //Consegir el producto
                $productos = new Producto();
                $productos->setId($producto_id);
                $producto = $productos->getOne();

                //Añadir al carrito
                if (is_object($producto)) {
                    $_SESSION['carrito'][] = array(                        
                        "unidad" => 1,
                        "producto" => $producto
                    );
                }
            }
            header("Location:" . base_url . "carrito/index");
        } else {
            header("Location:" . base_url);
        }
    }

    public function remuve() {
        
    }

    public function delete() {
        Utils::deleteSession('carrito');
        header("Location:" . base_url . "carrito/index");
    }

}

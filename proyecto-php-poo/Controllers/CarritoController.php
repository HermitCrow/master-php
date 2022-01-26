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
                $counter = Utils::addCarritoId($producto_id);
            }
            if (!isset($counter) || $counter == 0) {

                //Consegir el producto
                $productos = new Producto();
                $productos->setId($producto_id);
                $producto = $productos->getOne();

                //Añadir al carrito
                Utils::addProductoCarrito($producto);
            }
            header("Location:" . base_url . "carrito/index");
        } else {
            header("Location:" . base_url);
        }
    }

    public function up() {
        if (isset($_GET['index'])) {
            $index = $_GET['index'];
            if (isset($_SESSION['carrito'])) {
                Utils::addUp($index);
            }
            header("Location:" . base_url . "carrito/index");
        }
    }

    public function down() {
        if (isset($_GET['index'])) {
            $index = $_GET['index'];
            if (isset($_SESSION['carrito'])) {
                Utils::addDown($index);
                
            }
            header("Location:" . base_url . "carrito/index");
        }
    }

    public function remove() {
        if (isset($_GET['index'])) {
            $index = $_GET['index'];
            Utils::removeCarrito($index);
        } else {
            header("Location:" . base_url . "carrito/error");
        }
    }

    public function delete() {
        Utils::deleteSession('carrito');
        header("Location:" . base_url . "producto/index");
    }

}

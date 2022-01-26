<?php

class Utils {

    public static function deleteSession($name) {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function isAdmin() {
        if (!isset($_SESSION['admin'])) {
            header("Location:" . base_url);
        } else {
            return true;
        }
    }

    public static function isIdentity() {
        if (!isset($_SESSION['login'])) {
            header("Location:" . base_url);
        } else {
            return true;
        }
    }

    public static function showCategorias() {
        require_once 'Models/categoria.php';
        $Categorias = new Categoria();
        $categoriaAll = $Categorias->getAll();
        return $categoriaAll;
    }

    public static function showStatus($status) {
        $result = "Pendiente";

        if ($status == "CONFIRMADO") {
            $result = "Pendiente";
        } elseif ($status == "PREPARADO") {
            $result = "En preparacion";
        } elseif ($status == "LISTO") {
            $result = "Preparado para enviar";
        } elseif ($status == "ENVIADO") {
            $result = "Enviado";
        }
        return $result;
    }

    public static function RandoName($type) {
        $permitted_chars = '0123456789abcdefghijklmnopqrs'
                . 'tuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        if ($type == "image/jpg") {
            $RandoName = 'Foto-'
                    . substr(str_shuffle($permitted_chars), 0, 16) . '.jpg';
        } elseif ($type == "image/jpeg") {
            $RandoName = 'Foto-'
                    . substr(str_shuffle($permitted_chars), 0, 16) . '.jpeg';
        } elseif ($type == "image/png") {
            $RandoName = 'Foto-'
                    . substr(str_shuffle($permitted_chars), 0, 16) . '.png';
        } elseif ($type == "image/gif") {
            $RandoName = 'Foto-'
                    . substr(str_shuffle($permitted_chars), 0, 16) . '.gif';
        } else {
            $RandoName = false;
        }
        return $RandoName;
    }

    public static function EditName($name) {

        $databuscar = array(".jpg", ".jpeg", ".png", ".gif", ".JPG");
        $datarenpla = array("", "", "", "", "");
        $EditName = str_replace($databuscar, $datarenpla, $name);

        return $EditName;
    }

    public static function statCarrito() {

        $stats = array(
            'count' => 0,
            'total' => 0
        );

        if (isset($_SESSION['carrito'])) {
            $stats['count'] = count($_SESSION['carrito']);
            //var_dump($_SESSION['carrito']);
            foreach ($_SESSION['carrito'] as $producto) {
                $stats['total'] += $producto['producto']->Precio * $producto['unidad'];
            }
        }

        return $stats;
    }

    public static function addCarritoId($producto_id) {
        $counter = 0;
        foreach ($_SESSION['carrito'] as $indice => $dato) {
            if ($producto_id == $dato['producto']->Id) {
                $_SESSION['carrito'][$indice]['unidad']++;
                $counter++;
            }
        }
        return $counter;
    }

    public static function addProductoCarrito($producto) {
        if (is_object($producto)) {
            $_SESSION['carrito'][] = array(
                "unidad" => 1,
                "producto" => $producto
            );
        }
    }

    public static function addUp($index) {
        $dato = [];
        foreach ($_SESSION['carrito'] as $indice => $dato) {
            if ($index == $indice) {
                $_SESSION['carrito'][$indice]['unidad']++;
            }
        }
    }

    public static function addDown($index) {
        $dato = [];
        foreach ($_SESSION['carrito'] as $indice => $dato) {
            if ($index == $indice) {
                $_SESSION['carrito'][$indice]['unidad']--;
                Utils::carritoIsCero($_SESSION['carrito'][$indice]['unidad'], $indice);
            }
        }
    }

    public static function carritoIsCero($carritoUnidad, $indice) {
        if ($carritoUnidad == 0) {
            Utils::removeCarrito($indice);
        }
    }

    public static function removeCarrito($index) {
        $dato = [];
        foreach ($_SESSION['carrito'] as $indice => $dato) {
            if (isset($_SESSION['carrito']) && $index == $indice) {

                unset($_SESSION['carrito'][$index]);
            } else {
                header("Location:" . base_url . "carrito/error");
            }
        }
        if (count($_SESSION['carrito']) >= 1) {
            header("Location:" . base_url . "carrito/index");
        } else {
            header("Location:" . base_url . "producto/index");
        }
    }

}

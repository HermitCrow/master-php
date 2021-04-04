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

    public static function showCategorias() {
        require_once 'Models/categoria.php';
        $Categorias = new Categoria();
        $categoriaAll = $Categorias->getAll();
        return $categoriaAll;
    }

    public static function RandoName($type) {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        if ($type == "image/jpg") {
            $RandoName = 'Foto-' . substr(str_shuffle($permitted_chars), 0, 16) . '.jpg';
        } elseif ($type == "image/jpeg") {
            $RandoName = 'Foto-' . substr(str_shuffle($permitted_chars), 0, 16) . '.jpeg';
        } elseif ($type == "image/png") {
            $RandoName = 'Foto-' . substr(str_shuffle($permitted_chars), 0, 16) . '.png';
        } elseif ($type == "image/gif") {
            $RandoName = 'Foto-' . substr(str_shuffle($permitted_chars), 0, 16) . '.gif';
        } else {
            $RandoName = false;
        }
        return $RandoName;
    }

    public static function EditName($name) {        
        
          $databuscar = array(".jpg",".jpeg",".png",".gif",".JPG");
          $datarenpla = array("","","","","");
          $EditName = str_replace($databuscar,$datarenpla,$name);
         
        return $EditName;
    }
   
}

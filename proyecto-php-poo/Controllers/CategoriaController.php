<?php

require_once 'Models/categoria.php';

class categoriaController {

    public function index() {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categoriasall = $categoria->getAll();

        require_once 'Views/categoria/index.php';
    }

    public function listarPorCategorias() {        
        if (isset($_GET['id'])) {
            $id = isset($_GET['id']) ? trim($_GET['id']) : false;
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoriasall = $categoria->getUnoByIdyToDatabase();
            if ($categoriasall->num_rows == 0) {
                header("Location:" . base_url . "categoria/error");
            } else {                
                while ($cat = $categoriasall->fetch_object()) {
                    if ($cat->Id == $id) {                                            
                        $categoriasall = $categoria->getRandom(6);                        
                        require_once 'Views/categoria/listar.php';
                        break;
                    }
                }
            }

            
        } else {
            header("Location:" . base_url . "categoria/error");
        }
    }

    public function crear() {
        Utils::isAdmin();
        require_once 'Views/categoria/crear.php';
    }

    public function save() {
        Utils::isAdmin();

        if (isset($_POST['crear'])) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $Categoria = new Categoria();
            $Categoria->setNombre($nombre);
            $result = $Categoria->save();
            if ($result) {
                $_SESSION['categoria'] = "complete";
                header("Location:" . base_url . "categoria/index");
            } else {
                $_SESSION['Error_categoria'] = "Esta categoría ya existe.";
                header("Location:" . base_url . "categoria/crear");
            }
        } else {
            header("Location:" . base_url . "categoria/error");
        }
    }

    public function editar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = trim($_GET['id']);
            $Categoris = new Categoria();
            $Categoria = $Categoris->getAll();
            if ($Categoria) {

                while ($cat = $Categoria->fetch_object()) {
                    if ($cat->Id == $id) {
                        $evaluar = true;
                        require_once 'Views/categoria/editar.php';
                        break;
                    } else {
                        $evaluar = false;
                    }
                }
                if (!$evaluar) {
                    header("Location:" . base_url . "categoria/error");
                }
            }
        } else {
            header("Location:" . base_url . "categoria/error");
        }
    }

    public function update() {
        Utils::isAdmin();
        if (isset($_POST['editar'])) {

            $Categorias = new Categoria();
            $Categorias->setId($_POST['id']);
            $Categorias->setNombre($_POST['nombre']);
            $update = $Categorias->update();

            if ($update) {
                $_SESSION['categoria'] = "complete";
                header("Location:" . base_url . "categoria/index");
            }
        } else {
            header("Location:" . base_url . "categoria/error");
        }
    }

    public function eliminar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $Id = isset($_GET['id']) ? trim($_GET['id']) : false;
            $result = false;
            $Categoria = new Categoria();
            $Categorias = $Categoria->getAll();
            while ($cat = $Categorias->fetch_object()) {
                if ($cat->Id == $Id) {
                    $Categoria->setId($Id);
                    $result = $Categoria->delete();
                    break;
                }
            }
            if ($result) {
                $_SESSION['categoria'] = "complete";
                header("Location:" . base_url . "categoria/index");
            } else {
                $_SESSION['categoria'] = "failed";
                header("Location:" . base_url . "categoria/index");
            }
        } else {
            header("Location:" . base_url . "categoria/error");
        }
    }

}

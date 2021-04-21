<?php

require_once 'Models/producto.php';

class productoController {

    public function index() {
        $AllProductos = new Producto();
        $productos = $AllProductos->getRandom(6);

        require_once 'Views/producto/destacados.php';
    }
    public function listarOn() {
        if(isset($_GET['id'])){
            $id = isset($_GET['id']) ? trim($_GET['id']) : false;
            $productos = new Producto();
            $productos->setId($id);
            $prod = $productos->getOne();            
            require_once 'Views/producto/ver.php';
            
        } else {
            header("Location:".base_url."producto/error");
        }
    }
    public function gestion() {
        Utils::isAdmin();

        $ProductosObject = new Producto();
        $productos = $ProductosObject->getAll();

        if (!$productos) {
            $_SESSION['crear'] = 'failed'; //mensage que notifica que la peticion no se completo
        } else {
            if ($productos->num_rows == 0) {
                $_SESSION['Producto'] = 'failed'; //mensage que notifica que no hay productos registrados
            } else {
                $_SESSION['Producto'] = 'Complete'; //mensage que notifica se ha registrado el productos correctamente
            }
        }

        require_once 'Views/producto/gestion.php';
    }

    public function crear() {
        Utils::isAdmin();
        require_once 'Views/producto/crear.php';
    }

    public function save() {
        Utils::isAdmin();
        if (isset($_POST['submit'])) {

            $Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $Descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $Precio = isset($_POST['precio']) ? trim($_POST['precio']) : false;
            $Stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $Categoria_Id = isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
            $Oferta = isset($_POST['oferta']) ? $_POST['oferta'] : false;
            $Fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;

            $error = array();

            if (!empty($Precio) && is_numeric($Precio) && preg_match("/[1-9]/", $Precio)) {
                $precio_valido = true;
            } else {
                $precio_valido = false;
                $error['precio'] = "El precio no valido";
            }

            if (count($error) == 0) {
                //Manejado el archivo
                $archivo = $_FILES['imagen'];
                $tipo = $archivo['type'];
                $nomTemporal = $archivo['tmp_name'];
                $ImageNombre = Utils::RandoName($tipo); //Generando un nombre rando para la imagen
                $EditName = Utils::EditName($ImageNombre); //Quitando la extencion del nombre de la imagen 
                if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
                    if (!is_dir('Uploads/Imagen/' . $EditName)) {
                        mkdir('Uploads/Imagen/' . $EditName, 0777, true);
                    }
                    //Guardando en la Base de datos
                    $producto = new Producto();
                    $producto->setNombre($Nombre);
                    $producto->setDescripcion($Descripcion);
                    $producto->setPrecio($Precio);
                    $producto->setStock($Stock);
                    $producto->setCategoria_Id($Categoria_Id);
                    $producto->setOferta($Oferta);
                    $producto->setFecha($Fecha);
                    $producto->setImagen($ImageNombre);

                    $result = $producto->save();

                    if ($result) {
                        $_SESSION['crear'] = 'complete';
                        move_uploaded_file($nomTemporal, 'Uploads/Imagen/' . $EditName . '/' . $ImageNombre);
                        header("Location:" . base_url . "producto/gestion");
                    } else {
                        $_SESSION['crear'] = 'failed';
                        header("Location:" . base_url . "producto/crear");
                    }
                } else {
                    $_SESSION['crear'] = 'failed';
                    header("Location:" . base_url . "producto/crear");
                }
            } else {
                $_SESSION['crear'] = 'failed';
                header("Location:" . base_url . "producto/crear");
            }
        } else {
            header("Location:" . base_url . "producto/error");
        }
    }

    public function detalle() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = trim($_GET['id']);
            $producto = new Producto();
            $productos = $producto->getAll();
            while ($prod = $productos->fetch_object()) {
                if ($prod->Id == $id) {
                    !$evaluar = true;
                    require_once 'Views/producto/detalle.php';
                    break;
                } else {
                    !$evaluar = false;
                }
            }
            if (!$evaluar) {
                header("Location:" . base_url . "producto/error");
            }
        } else {
            header("Location:" . base_url . "producto/error");
        }
    }

    public function editar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = trim($_GET['id']);
            $Productos = new Producto();
            $Producto = $Productos->getAll();
            if ($Producto) {

                while ($prod = $Producto->fetch_object()) {
                    if ($prod->Id == $id) {
                        $evaluar = true;
                        require_once 'Views/producto/editar.php';
                        break;
                    } else {
                        $evaluar = false;
                    }
                }
                if (!$evaluar) {
                    header("Location:" . base_url . "producto/error");
                }
            }
        } else {
            header("Location:" . base_url . "producto/error");
        }
    }

    public function update() {
        Utils::isAdmin();
        if (isset($_POST['submit'])) {

            $Id = isset($_POST['id']) ? $_POST['id'] : false;
            $Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $Descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $Precio = isset($_POST['precio']) ? trim($_POST['precio']) : false;
            $Stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $Categoria_Id = isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
            $Oferta = isset($_POST['oferta']) ? $_POST['oferta'] : false;
            $Fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;

            $producto = new Producto();

            $error = array();

            if (!empty($Precio) && is_numeric($Precio) && preg_match("/[1-9]/", $Precio)) {
                $precio_valido = true;
            } else {
                $precio_valido = true;
                $error['precio'] = "El precio no valido";
            }

            if (count($error) == 0) {
                //Manejado el archivo
                $archivo = $_FILES['imagen'];
                $tipo = $archivo['type'];
                $nomTemporal = $archivo['tmp_name'];
                $Preoductos = $producto->getAll();                
                if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "") {
                    $ImageNombre = Utils::RandoName($tipo); //get nombre rando

                    while ($prop = $Preoductos->fetch_object()) {
                        if ($prop->Id == $Id) {

                            if (empty($prop->Imagen)) {
                                $ImageName = $ImageNombre;
                            } else {
                                $ImageName = $prop->Imagen;
                            }

                            $EditName = Utils::EditName($ImageName);
                            if (!is_dir('Uploads/Imagen/' . $EditName)) {
                                mkdir('Uploads/Imagen/' . $EditName, 0777, true);
                            }

                            //Guardando en la Base de datos

                            $producto->setId($Id);
                            $producto->setNombre($Nombre);
                            $producto->setDescripcion($Descripcion);
                            $producto->setPrecio($Precio);
                            $producto->setStock($Stock);
                            $producto->setCategoria_Id($Categoria_Id);
                            $producto->setOferta($Oferta);
                            $producto->setFecha($Fecha);


                            $producto->setImagen($ImageName);
                            $result = $producto->update();

                            if ($result) {
                                $_SESSION['crear'] = 'complete';
                                move_uploaded_file($nomTemporal, 'Uploads/Imagen/' . $EditName . '/' . $ImageNombre);
                                header("Location:" . base_url . "producto/gestion");
                            } else {
                                $_SESSION['crear'] = 'failed';
                                header("Location:" . base_url . "producto/crear");
                            }
                            break;
                        }//Fin If Validar Id
                    }//Fin While
                } else {
                    $_SESSION['crear'] = 'failed';
                    header("Location:" . base_url . "producto/crear");
                }
            } else {
                $_SESSION['crear'] = 'failed';
                header("Location:" . base_url . "producto/crear");
            }
        } else {
            header("Location:" . base_url . "producto/error");
        }
    }

    public function eliminar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {

            $Id = isset($_GET['id']) ? trim($_GET['id']) : false;

            $Producto = new Producto();
            $Producto->setId($Id);

            $result = $Producto->delete();

            if ($result) {
                $_SESSION['crear'] = 'complete';
                header("Location:" . base_url . "producto/gestion");
            } else {
                $_SESSION['crear'] = 'failed';
                header("Location:" . base_url . "producto/gestion");
            }
        } else {
            header("Location:" . base_url . "producto/error");
        }
    }

}

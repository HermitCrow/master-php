<?php

require_once 'autoload.php';


//$usuario = new Usuario();
//echo $usuario->nombre;
//echo "<br/>";
//echo $usuario->email;


//Espacios de nombres y Paquetes

use Misclases\Usuario, Misclases\Categoria, Misclases\Entrada;
use panelAdministrador\Usuario as UsuarioAdmin;

class principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada;
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada): void {
        $this->entrada = $entrada;
    }
    function Informacion(){
        echo __METHOD__;
    }

}

$principal = new principal();
$principal->Informacion();
$metodos = get_class_methods($principal);

$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);

//var_dump($principal->usuario);

$usuario = new UsuarioAdmin();

//var_dump($usuario);

//Comprobar si existe una clase

$class = @class_exists('Misclases\Usuario');

if($class){
    echo "<h1>La clase existe</h1>";
}else{
    echo "<h1>La clase no existe</h1>";
}
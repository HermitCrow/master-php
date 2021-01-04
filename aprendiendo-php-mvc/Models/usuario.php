<?php
require_once 'modelobase.php';
class Usuario extends Modelobase{
    public $Nombre;
    public $Apellido;
    public $email;
    public $password;
    
     public function __construct() {
        parent::__construct();
    }
    
    function getNombre() {
        return $this->Nombre;
    }

    function getApellido() {
        return $this->Apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setNombre($Nombre): void {
        $this->Nombre = $Nombre;
    }

    function setApellido($Apellido): void {
        $this->Apellido = $Apellido;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setPassword($password): void {
        $this->password = $password;
    }    
    
}
<?php

class Usuario{
    private $Id;
    private $Nombre;
    private $Apellidos;
    private $Email;
    private $Password;
    private $Rol;
    private $Image;
    private $db;
    
    public function __construct() {
        $this->db = DataBase::Connect(); 
    }
            
    function getId() {
        return $this->Id;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getApellidos() {
        return $this->Apellidos;
    }

    function getEmail() {
        return $this->Email;
    }

    function getPassword() {
        return $this->Password;
    }

    function getRol() {
        return $this->Rol;
    }

    function getImage() {
        return $this->Image;
    }

    function setId($Id): void {
        $this->Id = $Id;
    }

    function setNombre($Nombre): void {
        $this->Nombre = $this->db->real_escape_string($Nombre);
    }

    function setApellidos($Apellidos): void {
        $this->Apellidos = $this->db->real_escape_string($Apellidos);
    }

    function setEmail($Email): void {
        $this->Email = $this->db->real_escape_string($Email);
    }

    function setPassword($Password): void {
        $this->Password = password_hash($this->db->real_escape_string($Password)
                , PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function setRol($Rol): void {
        $this->Rol = $Rol;
    }

    function setImage($Image): void {
        $this->Image = $Image;
    }

    public function save() {
        $query = "INSERT INTO usuarios VALUES(NULL,"
                . "'{$this->getNombre()}','{$this->getApellidos()}',"
                . "'{$this->getEmail()}','{$this->getPassword()}',"
                . "'user','null')";
        $save = $this->db->query($query);
        
        $result = false;
        
        if($save){
            $result = true;
        }
        
        return $result;
    }
}


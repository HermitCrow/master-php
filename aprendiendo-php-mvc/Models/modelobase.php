<?php

require_once 'config/DataBase.php';

class Modelobase {
    
    private $db;
    
    public function __construct() {
        $this->db = DataBase::Conectar();
    }
    
    public function consegirTodo() {
        var_dump($this->db);
        return "Sacar todos los usuarios";
    }

}

<?php

require_once 'config/DataBase.php';

class Modelobase {
    
    public $db;
    
    public function __construct() {
        $this->db = DataBase::Conectar();
    }
    
    public function consegirTodo($table) {
       $query = $this->db->query("SELECT * FROM $table ORDER BY Id DESC");
       return $query;
    }

}

<?php

class NotaController{
    
    public function listar(){
        require_once 'Models/nota.php';
        $nota = new Nota();
        $nota->setNombre("Emmanuel");
        $nota->setContenido("Hermoso y inteligente");        
        require_once 'Views/Notas/listar.php';
    }
    
    public function crear(){
        
    }
    public function borrar() {
        
    }
}
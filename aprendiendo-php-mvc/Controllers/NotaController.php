<?php

class NotaController{
    
    public function listar(){
        require_once 'Models/nota.php';
        $nota = new Nota();
        //$nota->setNombre("Emmanuel");
       // $nota->setContenido("Hermoso y inteligente");   
        $notas = $nota->consegirTodo("notas");
        require_once 'Views/Notas/listar.php';
    }
    
    public function crear(){
        require_once 'Models/nota.php';
        $nota = new Nota();
        $nota->setUsuario_Id(1);
        $nota->setTitulo("mi amor");
        $nota->setDescripcion("Hola mi amor.");        
        $nota->Guardar();        
        
        header("Location: inderx.php?controller=Nota&action=listar");
        
    }
    public function borrar() {
        
    }
}
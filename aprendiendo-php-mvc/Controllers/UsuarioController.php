<?php

class UsuarioController{
    
    public function MostrarTodos(){
        require_once 'Models/usuario.php';
        
        $usuario = new Usuario();
        $model = $usuario->consegirTodo();
        
        require_once 'Views/usuario/mostrar.php';
    }
    
    public function crear(){
        require_once 'Views/usuario/crear.php';
    }
}


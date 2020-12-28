<?php
//Herencia: Es la posibilidad de compartir atributos o propiedades y metodos entre clases

class Persona{
    //Atributos
    public $nombre;
    public $apellido;
    public $edad;

    //Get

    public function getNombre(){
        return $this->nombre;
    }

    public function getApelllido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    //Set

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function hablar(){
        return "Estoy Hablado";
    }

    public function caminar(){
        return "Estoy Caminado";
    }
}//Fin class

class Informatico extends Persona{

    public $experienciaProgramado;
    public $lenguajes;

    public function __construct(){
        $this->experienciaProgramado = 5;
        $this->lenguajes = "PHP, Js";
    }

    public function programar(){
        return "Soy programador";
    }

    public function repararOrdenador(){
        return "Reparo Computadoras";
    }

    public function hacerOfimatica(){
        return "Se digitar documentos";
    }
}

class TecnicoenRedes extends Informatico{
    public $auditoriaRedes;
    public $experienciaRedes;

    public function __construct(){
        parent::__construct();
        
        $this->auditoriaRedes = 'Experto';
        $this->experienciaRedes = 5; 
    }

    public function auditoria(){
        return "Estoy auditando una red";
    }
}
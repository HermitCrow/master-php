<?php
require_once 'modelobase.php';
class Nota extends Modelobase{
    public $nombre;
    public $contenido;
    public function getNombre() {
        return $this->nombre;
    }

    public function getContenido() {
        return $this->contenido;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setContenido($contenido): void {
        $this->contenido = $contenido;
    }
   
}
<?php

namespace Misclases;

class Categoria{
    public $nombre;
    public $descripcion;
    
    public function __construct() {
         $this->nombre = "Action";
         $this->descripcion = "Disparos, peleas y mas";
     }
}

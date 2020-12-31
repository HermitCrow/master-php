<?php

namespace panelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
         $this->nombre = "Nairoby Soto";
         $this->email = "nairobysoto@gmail.com";
     }
}

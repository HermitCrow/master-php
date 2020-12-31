<?php

namespace Misclases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
         $this->nombre = "Emmanuel Ulloa";
         $this->email = "emmanululloa@gmail.com";
     }
}
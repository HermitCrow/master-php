<?php

class Usuaraio{
        public $nombre;
        public $email;
        
        public function __construct() {
            $this->nombre = "Emmanuel Ulloa";
            $this->email = "emmanululloa@gmail.com";
            echo "Se esta creando el objeto <br/>";
        }
        public function __toString() {
            return "Hola, {$this->nombre}, esta registrador con el siguiente email {$this->email}";
        }
        
        public function __destruct() {
            echo "<br/> Destruyendo el objeto";       
        }
}

$usuario = new Usuaraio();

//for($i=1;$i <= 200;$i++){
//    echo $i."<br/>";
//}
echo $usuario."<br/>";
//echo $usuario->email;
<?php

trait Utilidades{
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function mostrarNombre() {
        echo "<h1>El Nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    use Utilidades;

}

class Persona{
    public $nombre;
    public $apellido;
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
    public $price;
    use Utilidades;
}

$coche = new Coche();
$persona = new Persona();
$videojuegos = new VideoJuego();

$coche->setNombre("Honda Civic");
$coche->mostrarNombre();
$persona->setNombre("Emmanuel Ulloa");
$persona->mostrarNombre();
$videojuegos->setNombre("ARK");
$videojuegos->mostrarNombre();

//var_dump($videojuegos);

<?php
//Programacion Orientada a Objetos Con PHP(POO)


//Definisr una clase(molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche{

//Atributos o Propiedades(antes variables)
private $color;
private $marca;
private $modelo;
private $velocidad;
private $caballaje;
private $plaza;
//Metodos, son Acciones que hace el objeto (Antes Funciones)
public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plaza){
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->velocidad = $velocidad;
    $this->caballaje = $caballaje;
    $this->plaza = $plaza;
}

public function getColor(){
return $this->color;
}

public function setColor($color){
$this->color = $color;
}

public function setModelo($modelo){
$this->modelo = $modelo;
}

public function acelerar(){
$this->velocidad++;
}

public function frenar(){
$this->velocidad--;
}

public function getvelocidad(){
return $this->velocidad;
}

public function mostrarInformacion(Coche $miObjeto){
    if(is_object($miObjeto)){
        $informacion  = "<h1>Informacion Coches</h1>";
        $informacion .= "Color : ".$miObjeto->color;
        $informacion .= "<br/>Marca : ".$miObjeto->marca;
        $informacion .= "<br/>Velocidad : ".$miObjeto->velocidad;
    }else{
        $informacion = "Tu dato es este: $miObjeto";
    }

return $informacion;
}
}//Fin definicion clase coche
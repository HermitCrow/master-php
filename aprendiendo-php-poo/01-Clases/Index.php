<?php
//Programacion Orientada a Objetos Con PHP(POO)


//Definisr una clase(molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche{
    
    //Atributos o Propiedades(antes variables)
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plaza = 2; 
    //Metodos, son Acciones que hace el objeto (Antes Funciones)
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
}//Fin definicion clase coche

//Crear un objeto / instanciar la clase coche

$coche = new Coche();

echo $coche->getColor()."</br>";

$coche->setColor("Verde");
echo "El color del Coche es: ".$coche->getColor()."</br>";

echo "La velocidad inicial del coche es: ".$coche->getvelocidad()."</br>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo "La velocidad del coche es: ".$coche->getvelocidad()."</br>";


$coche2 = new Coche();
$coche2->setColor("Lila");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);
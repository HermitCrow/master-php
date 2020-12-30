<?php

interface Ordenador{
    
    public function encender(); 
    public function apagar();
    public function reiniciar();
    public function desfracmentar();
    public function detectarUSB();

}

class iMac implements Ordenador{
    private $model;
    
    function getModel() {
        return $this->model;
    }

    function setModel($model): void {
        $this->model = $model;
    }

    public function encender() {
        
    }
    public function apagar() {
        
    }
    public function reiniciar() {
        
    }
    
    public function desfracmentar() {
        
    }
    
    public function detectarUSB() {
        
    }
}

$maquintos = new iMac();
$maquintos->setModel('I3024');
echo $maquintos->getModel();
//var_dump($maquintos);
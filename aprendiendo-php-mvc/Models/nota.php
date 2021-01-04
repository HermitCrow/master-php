<?php
require_once 'modelobase.php';
class Nota extends Modelobase{
    public $Usuario_Id;
    public $Titulo;
    public $Descripcion;
    
    public function __construct() {
        parent::__construct();
    }
 
    function getUsuario_Id() {
        return $this->Usuario_Id;
    }

    function getTitulo() {
        return $this->Titulo;
    }

    function getDescripcion() {
        return $this->Descripcion;
    }

    function setUsuario_Id($Usuario_Id): void {
        $this->Usuario_Id = $Usuario_Id;
    }

    function setTitulo($Titulo): void {
        $this->Titulo = $Titulo;
    }

    function setDescripcion($Descripcion): void {
        $this->Descripcion = $Descripcion;
    }

        
    public function Guardar() {
        $sql = "INSERT INTO notas(Usuario_Id, Titulo, Descripcion, Fecha) VALUES({$this->Usuario_Id}, '{$this->Titulo}', '{$this->Descripcion}',CURDATE());";
        
        $guardado = $this->db->query($sql);
        return $guardado;
    }
   
}
<?php

class pedido {

    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    public function __construct() {
        $this->db = DataBase::Connect();
    }

    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getLocalidad() {
        return $this->localidad;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCoste() {
        return $this->coste;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id): void {
        $this->usuario_id = $usuario_id;
    }

    function setProvincia($provincia): void {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    function setLocalidad($localidad): void {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    function setDireccion($direccion): void {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setCoste($coste): void {
        $this->coste = $coste;
    }

    function setEstado($estado): void {
        $this->estado = $this->db->real_escape_string($estado);
    }

    function setFecha($fecha): void {
        $this->fecha = $this->db->real_escape_string($fecha);
    }

    function setHora($hora): void {
        $this->hora = $this->db->real_escape_string($hora);
    }

    public function getAll(): object {
        //$result = false;
        $query = "SELECT * FROM pedidos ORDER BY Id ASC;";
        $queryResult = $this->db->query($query);

        if ($queryResult) {
            $result = $queryResult;
        }

        return $result;
    }

    public function getOne(): object {
        $result = false;
        $query = "SELECT * FROM pedidos WHERE Id={$this->getId()};";
        $queryResult = $this->db->query($query);

        if ($queryResult) {
            $result = $queryResult->fetch_object();
        }

        return $result;
    }
    public function isIdValid(): object {
        
        $query = "SELECT * FROM pedidos WHERE Id={$this->getId()};";
        $queryResult = $this->db->query($query);
        return $queryResult;
    }
    
    public function getOneByUser(): object {
        $result = false;
        $query = "SELECT p.Id, p.coste, lp.Unidades, "
                . "pr.Nombre FROM lineas_pedidos lp "
                . "INNER JOIN pedidos p ON p.Id = lp.pedido_id "
                . "INNER JOIN productos pr ON pr.Id = lp.Producto_id "
                . "WHERE p.usuario_id ={$this->getUsuario_id()} "
                . "ORDER BY p.Id DESC LIMIT 1;";
        
        $queryResult = $this->db->query($query);        
        
        if ($queryResult) {
            $result = $queryResult->fetch_object();
        }

        return $result;
    }
      public function getAllByUser(): object {
        $result = false;
        $query = "SELECT p.* "
                . "FROM pedidos p  "                
                . "WHERE p.usuario_id ={$this->getUsuario_id()} "
                . "ORDER BY p.Id DESC;";
        
        $queryResult = $this->db->query($query);        
        
        if ($queryResult) {
            $result = $queryResult;
        }

        return $result;
    }
    public function getProductoByPedidos($id): object {
        $sql = "SELECT pr.*, lp.Unidades FROM productos pr "
                . "INNER JOIN lineas_pedidos lp ON lp.Producto_id = pr.Id  "
                . "WHERE lp.Pedido_id ={$id} ";
        $producto = $this->db->query($sql);        
        return $producto;        
    }

    public function save(): bool {

        $query = "INSERT INTO pedidos VALUES(NULL,{$this->getUsuario_id()},"
                . "'{$this->getProvincia()}','{$this->getLocalidad()}',"
                . "'{$this->getDireccion()}',{$this->getCoste()},"
                . "'CONFIRMADO',CURDATE(),CURTIME());";

        $save = $this->db->query($query);

        if ($save) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function save_linea(): bool {
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
        $query = $this->db->query($sql);
        $pedido_Id = $query->fetch_object()->pedido;
        foreach ($_SESSION['carrito'] as $indice => $dato) {
            $producto = $dato['producto'];
            
            $query = "INSERT INTO lineas_pedidos VALUES(NULL,{$pedido_Id},{$producto->Id},{$dato['unidad']});";
            $save = $this->db->query($query);
        }
        if ($save) {
            $result = true; 
        } else {
            $result = false;
        }

        return $result;
    }

    public function updateStatus(): bool {
        $query = "UPDATE pedidos "
                . "SET Estado = '{$this->getEstado()}' "
                . "WHERE Id = {$this->getId()}";

        $save = $this->db->query($query);
        if($save){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

}

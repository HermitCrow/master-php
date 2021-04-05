<?php declare (strict_types=1);

/*

 * Modelo Producto

 */


class Producto {

    private $Id;
    private $Categoria_Id;
    private $Nombre;
    private $Descripcion;
    private $Precio;
    private $Stock;
    private $Oferta;
    private $Fecha;
    private $Imagen;
    private $db;

    public function __construct() {
        $this->db = DataBase::Connect();
    }

    function getId(): int {
        return $this->Id;
    }

    function getCategoria_Id() : int{
        return $this->Categoria_Id;
    }

    function getNombre(): string {
        return $this->Nombre;
    }

    function getDescripcion() : string {
        return $this->Descripcion;
    }

    function getPrecio(): float {
        return $this->Precio;
    }

    function getStock() : int{
        return $this->Stock;
    }

    function getOferta() : string{
        return $this->Oferta;
    }

    function getFecha() : string{
        return $this->Fecha;
    }

    function getImagen(): string {
        return $this->Imagen;
    }

    function setId(int $Id): void {
        $this->Id = ($Id);
    }

    function setCategoria_Id(int $Categoria_Id): void {
        $this->Categoria_Id = $Categoria_Id;
    }

    function setNombre(string $Nombre): void {
        $this->Nombre = $this->db->real_escape_string($Nombre);
    }

    function setDescripcion(string $Descripcion): void {
        $this->Descripcion = $this->db->real_escape_string($Descripcion);
    }

    function setPrecio(float $Precio): void {
        $this->Precio = $Precio;
    }

    function setStock( int $Stock): void {
        $this->Stock = $Stock;
    }

    function setOferta(string $Oferta): void {
        $this->Oferta = $Oferta;
    }

    function setFecha(string $Fecha): void {
        $this->Fecha = $this->db->real_escape_string($Fecha);
    }

    function setImagen(string $Imagen): void {
        $this->Imagen = $this->db->real_escape_string($Imagen);
    }
    
    public function getAll(): object {
        //$result = false;
        $query = "SELECT * FROM productos ORDER BY Id ASC;";
        $queryResult = $this->db->query($query);
        
        if($queryResult){
            $result = $queryResult;
        }
        
        return $result;
    }
    
    public function getOne(): object {
        //$result = false;
        $query = "SELECT * FROM productos WHERE Id={$this->getId()};";
        $queryResult = $this->db->query($query);
        
        if($queryResult){
            $result = $queryResult->fetch_object();
        }
        
        return $result;
    }
    
    public function getRandom(int $limit) : object{
        $result = false;
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit;");
        if($productos){
            $result = $productos;
        }
        
        return $result;
    }
     public function save() : bool{
       
        $query = "INSERT INTO productos VALUES(NULL,'{$this->getCategoria_Id()}',"
                . "'{$this->getNombre()}','{$this->getDescripcion()}',"
                . "'{$this->getPrecio()}','{$this->getStock()}',"
                . "'{$this->getOferta()}','{$this->getFecha()}','{$this->getImagen()}');";
        
        $save = $this->db->query($query);

        $result = false;

        if ($save) {
            $result = true;
        }

        return $result;
    }
    public function update() : bool{
        $query = "UPDATE productos SET "
                . "categoria_id ='{$this->getCategoria_Id()}',"
                . "Nombre ='{$this->getNombre()}',"
                . "Descripcion ='{$this->getDescripcion()}',"
                . "Precio ='{$this->getPrecio()}',"
                . "Stock ='{$this->getStock()}',"
                . "Oferta ='{$this->getOferta()}',"
                . "Fecha ='{$this->getFecha()}',"
                . " Imagen ='{$this->getImagen()}'"
                . "WHERE Id = {$this->getId()};";
                
        $update = $this->db->query($query);

        $result = false;

        if ($update) {
            $result = true;
        }

        return $result;
    }
    public function delete() : bool{
        $result = false;
        $query = "DELETE FROM productos WHERE Id={$this->getId()};";
        $delete = $this->db->query($query);
        
        if($delete){
            $result = $delete;
        }
        
        return $result;
    }

    

}

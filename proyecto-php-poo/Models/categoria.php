<?php

declare (strict_types=1);



/*
 * Moddelo categoria
 */



class Categoria {

    private $Id;
    private $Nombre;
    private $db;

    public function __construct() {
        $this->db = DataBase::Connect();
    }

    function getId(): int {
        return $this->Id;
    }

    function getNombre(): string {
        return $this->Nombre;
    }

    function setId(int $Id): void {
        $this->Id = $Id;
    }

    function setNombre(string $Nombre): void {
        $this->Nombre = $this->db->real_escape_string($Nombre);
    }

    public function getAll(): object {

        return $this->getAllToDatabase();
    }

    private function getAllToDatabase(): object {
        $query = "SELECT * FROM categorias ORDER BY Id DESC;";

        $queryResult = $this->db->query($query);

        if (is_object($queryResult)) {
            $resultado = $queryResult;
        }

        return $resultado;
    }

    public function save(): bool {
        return $this->saveToDatabase();
    }

    private function saveToDatabase(): bool {
        $Result = false;
        $query1 = "SELECT Nombre FROM categorias WHERE Nombre = '{$this->getNombre()}'";
        $confirmar = $this->db->query($query1);

        if ($confirmar && $confirmar->num_rows == 1) {
            $Result = false;
        } else {
            $query2 = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
            $Save = $this->db->query($query2);

            if ($Save) {
                $Result = true;
            }
        }

        return $Result;
    }

    public function update(): bool {
        $result = false;
        $query = "UPDATE categorias SET Nombre = '{$this->getNombre()}' WHERE Id = {$this->getId()}";
        $update = $this->db->query($query);

        if ($update) {
            $result = true;
        }
        return $result;
    }

    public function delete(): bool {
        $result = false;
        $query = "DELETE FROM categorias WHERE Id={$this->getId()};";
        $delete = $this->db->query($query);

        if ($delete) {
            $result = $delete;
        }

        return $result;
    }

}

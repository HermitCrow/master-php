<?php declare (strict_types=1);


class Usuario {

    private $Id;
    private $Nombre;
    private $Apellidos;
    private $Email;
    private $Password;
    private $Rol;
    private $Image;
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

    function getApellidos(): string {
        return $this->Apellidos;
    }

    function getEmail(): string {
        return $this->Email;
    }

    function getPassword(): string {
        return $this->Password;
    }

    function getRol(): string {
        return $this->Rol;
    }

    function getImage(): string {
        return $this->Image;
    }

    function setId(int $Id): void {
        $this->Id = $Id;
    }

    function setNombre(string $Nombre): void {
        $this->Nombre = $this->db->real_escape_string($Nombre);
    }

    function setApellidos(string $Apellidos): void {
        $this->Apellidos = $this->db->real_escape_string($Apellidos);
    }

    function setEmail(string $Email): void {
        $this->Email = $this->db->real_escape_string($Email);
    }

    function setPassword(string $Password): void {
        $this->Password = $this->db->real_escape_string($Password);
    }

    function setRol(string $Rol): void {
        $this->Rol = $Rol;
    }

    function setImage(string $Image): void {
        $this->Image = $Image;
    }

    public function save() : bool{
        $passHash = password_hash($this->getPassword(), PASSWORD_BCRYPT, ['cost' => 4]);
        $query = "INSERT INTO usuarios VALUES(NULL,"
                . "'{$this->getNombre()}','{$this->getApellidos()}',"
                . "'{$this->getEmail()}','{$passHash}',"
                . "'user','null')";
        $save = $this->db->query($query);

        $result = false;

        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function login() {
        $result = false;
        //Consulta para conprobar las credenciales del usuario
        $query = "SELECT * FROM usuarios WHERE Email = '{$this->getEmail()}'";
        $login = $this->db->query($query);

        //Validar la consulta
        if ($login && $login->num_rows == 1) {

            //Crear un array con el objeto login
            $usuario = $login->fetch_object();

            //Comprobar la contraseña cifrar 
            $passwordVerify = password_verify($this->getPassword(), $usuario->Password);


            if ($passwordVerify) {
                //Regresando los datos del usuarion logueado
                $result = $usuario;
            }
        }
        return $result;
    }

}

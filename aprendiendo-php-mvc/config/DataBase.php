<?php

class  DataBase{
    public static function Conectar() {
        $conexcion = new mysqli("localhost","sa","123456","notasdb");
        $conexcion->query("SET NAME 'utf8'");
        
        return $conexcion;
    }
}
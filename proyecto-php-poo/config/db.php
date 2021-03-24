<?php

/* 
 * Coneccion a la base de datos.
 */

class Database{
    public static function Connect() {        
        $DataContext = new mysqli('localhost','sa','123456','tienda_master');
        $DataContext->query("SET NAMES 'utf8'");
        return $DataContext;
        
    }
}

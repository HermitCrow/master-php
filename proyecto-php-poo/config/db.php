<?php

/* 
 * Coneccion a la base de datos.
 */

class Database{
    public static function Connect() {
        $ConnectionString = array('localhost','sa','123456','tienda_master');
        $DataContext = new mysqli($ConnectionString);
        $DataContext->query("SET NAMES 'utf8'");
        return $DataContext;
        
    }
}

<?php

//Connection Database
/*
 * $ServerName = "PGRREDNA150249";
 * $ServerName = "LAPTOP-J533FSR0";
  */
$ServerName = "LAPTOP-J533FSR0";
/*$DataBase = "Blog";
$User = "sa";
$PassWord = "123456";*/
$ConnectionString = array("Database" => "Blog", "UID" => "sa", "PWD" => "123456");

    $DataContext = sqlsrv_connect($ServerName,$ConnectionString);
    sqlsrv_query($DataContext,"SET NAME 'utf-8'");


//Seccion start.

if(!isset($_SESSION)){
    session_start();
}
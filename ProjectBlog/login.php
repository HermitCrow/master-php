<?php

//Connection tu the database and start session.
require_once 'Include/connection.php';

if(isset($_POST)){

    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['email'] : false;

$password_has = password_hash($password, PASSWORD_BCRYPT,['cost'=>4]);

if()

}
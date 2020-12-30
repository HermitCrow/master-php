<?php

class User{

    const URL_Completa = "http://localhost/master-php/aprendiendo-php-poo/04-Estatico/";
    public $email;
    public $password;
    
    public function getEmail() {
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }

    //Set Function

    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }

}


$User = new User();
$User->setEmail("HermitCrow");
$User->setPassword(password_hash("123456",PASSWORD_BCRYPT,['cost'=>4]));

echo $User::URL_Completa;
var_dump($User);
<?php

if(!empty($_POST['nombre'])&&!empty($_POST['apellido'])&&!empty($_POST['edad'])){
    
    echo '<h1>'.$_POST['nombre'].' '.$_POST['apellido'].'</h1><br/>';
    echo '<h2>'.$_POST['edad'].'</h2><hr>';
    var_dump($_POST);
    
    
}

<?php


function autoload($className){
    require_once 'Controllers/'.$className.'.php';
}

spl_autoload_register('autoload');
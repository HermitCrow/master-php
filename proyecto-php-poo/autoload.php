<?php

function controller_autoload($className){
    require_once 'Controllers/'.$className.'.php';
}

spl_autoload_register('controller_autoload');

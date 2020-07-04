<?php


if(isset($_COOKIE['galleta'])){
    unset($_COOKIE['galleta']);
    setcookie('galleta','', time()-100);
}else {
    echo 'No se puede borrar algo que no existe';
}

header('Location:ver_cookie.php');
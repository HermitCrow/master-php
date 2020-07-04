<?php

//ver cookie


if(isset($_COOKIE['galleta'])){
    
echo "<h1>".$_COOKIE['galleta']."</h1>";

}else{
    echo 'No exixte la Cookie';
}

if(isset($_COOKIE['migalleta'])){
    
echo "<h1>".$_COOKIE['migalleta']."</h1>";

}else{
    echo 'No existe la Cookie';
}
?>
<a href="crear_cookie.php">Crear Cookie</a>
<a href="borrar_cookie.php">Borrar Cookie</a>


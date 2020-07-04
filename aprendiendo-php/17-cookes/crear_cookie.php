<?php

/* 
 *Las cookie es un fichero que se almacena en el ordenador del ususario que 
 *visita la web, con el fin de recordar datos o rastrear el comportamiento del mismo.
 * 
 */


//crear cookies

//setcookie("Nombre","Valores que solo puede ser texto", cadocidad,ruta,dominio);

//cookie basica
setcookie("galleta","valor cojie");

//Cookie con expiracion
setcookie("migalleta", "Mi galleta favorita es de cocolate", time()+(60*60*24*365));

header('Location:ver_cookie.php');
?>


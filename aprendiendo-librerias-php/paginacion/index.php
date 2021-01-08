<?php

require_once '../vendor/autoload.php';

//Conexion DB
$DataContext = new mysqli("localhost","sa","123456","notasdb");
$DataContext->query("SET NAMES 'utf8'");

//Consulta a paginar
$query = $DataContext->query("SELECT COUNT(Id) as 'total' FROM notas");
$numero_elementos = $query->fetch_object()->total;
$numerosporpagina = 2;


//hacer paginacion
$pagination = new Zebra_Pagination();

//numero total de elementos a paginar
$pagination->records($numero_elementos);

//numerosde elementos por pagina
$pagination->records_per_page($numerosporpagina);

$page = $pagination->get_page();
$offset = (($page - 1)* $numerosporpagina);
$sql = "SELECT * FROM notas LIMIT $offset,$numerosporpagina";
$notas = $DataContext->query($sql);
 
echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->Titulo}</h1>";
    echo "<h3>{$nota->Descripcion}</h3>";
}

$pagination->render();
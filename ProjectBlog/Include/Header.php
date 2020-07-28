<?php 
    require_once 'connection.php';
    require_once 'Include/helpers.php'; 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/Style.css" />
    <title>Blog de Videojuegos</title>
</head>


<body>
    <!-- Head -->
    <header id="header">
        <!-- Logo -->
        <div id="logo">
            <a href="Index.php">
                Blog de videojuegos
            </a>
        </div>
        <!-- MENU -->
        <nav id="nav">
            <ul>
                <li>
                    <a href="Index.php">Home</a>
                </li>
                <?php 
                    $Categories = GetCategory($DataContext);
                    while($Category = sqlsrv_fetch_array($Categories, SQLSRV_FETCH_ASSOC)) : 
                 ?>
                <li>
                    <a href="category.php?Id=<?=$Category['Id'];?>"><?= $Category['Names'];?></a>
                </li>
                <?php endwhile;?>
                <li>
                    <a href="Index.php">About</a>
                </li>
                <li>
                    <a href="Index.php">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="Clearfix"></div>
    </header>
    <div id="container">
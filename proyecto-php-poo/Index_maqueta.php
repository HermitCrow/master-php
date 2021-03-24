<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta Logo"/>
                    <a href="index.php">
                        Tienda de Camisetas
                    </a>
                </div>
            </header>
            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Categoria</a></li>
                    <li><a href="#">Categoria 2</a></li>
                </ul>
            </nav> 

            <div id="content">
                <!-- BARRA LATERAL -->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <h3>Login</h3>
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>
                            <label for="password">Contraseña</label>
                            <input type="password" name="password"/>
                            <input type="submit" value="Entrar"/>
                        </form> 
                        <ul>
                            <li><a href="#">Mis pedidos</a></li>
                            <li><a href="#">Gestionar pedidos</a></li>
                            <li><a href="#">Gestionar categorias</a></li>
                        </ul>

                    </div>
                </aside>
                <!-- CONTENIDO CENTRAL -->
                <div id="central">
                    <h1>Productos Destacados</h1>

                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul</h2>
                        <p>250 pesos</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul</h2>
                        <p>250 pesos</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul</h2>
                        <p>250 pesos</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul</h2>
                        <p>250 pesos</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul</h2>
                        <p>250 pesos</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- PIE DE PAGINA -->
            <footer id="footer">
                <p>Desarrollado por Emmanuel Ulloa &copy; <?= date('Y') ?></p>
            </footer>
        </div>
    </body>
</html>

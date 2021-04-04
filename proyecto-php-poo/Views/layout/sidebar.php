<div id="content">
    <!-- BARRA LATERAL -->
    <aside id="lateral">
        <div id="login" class="block_aside">
            <?php if (!isset($_SESSION['login'])) : ?>
                <h3>Login</h3>
                <form action="<?= base_url ?>usuario/loginIn" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" required/>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" required/>
                    <input type="submit" value="Entrar" name="loginIn"/>
                </form> 
            <?php endif; ?>
            <?php if (isset($_SESSION['login'])) : ?>
                <h3>Biemvenido | <?= $_SESSION['login']->Nombre; ?> <?= $_SESSION['login']->Apellidos; ?></h3>
                <a href="<?= base_url ?>usuario/loginOut"class="button button-red " style="width: auto !important;">Cerrar Sesion</a>
                <ul>
                    <li><a href="#">Mis pedidos</a></li>
                    <?php if (isset($_SESSION['admin'])) : ?>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="<?= base_url ?>categoria/index">Gestionar categorias</a></li>
                        <li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
                    <?php endif; ?>
                </ul>        
            <?php else : ?>  
                <ul>
                    <li><a href="<?= base_url ?>usuario/registro">Registrate aqui</a></li>       
                </ul>
            <?php endif; ?>
        </div>
    </aside>
    <!-- CONTENIDO CENTRAL -->
    <div id="central">

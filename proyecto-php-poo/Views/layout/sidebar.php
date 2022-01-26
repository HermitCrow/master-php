<div id="content">
    <!-- BARRA LATERAL -->
    <aside id="lateral">
        <div id="carrito" class="block_aside">
            <h3>Mi carrito</h3
            <?php $stats = Utils::statCarrito();?>
            <ul>
                <li><a href="<?= base_url ?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
                <li><a href="<?= base_url ?>carrito/index">Total: RD$ <?=$stats['total']?></a></li>
                <li><a href="<?= base_url ?>carrito/index">Ver carrito</a></li>
            </ul>
        </div>
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
                <?php if (isset($_SESSION['error_login'])) : ?><br/>
                <strong class="alert_red"><?=$_SESSION['error_login']?></strong>
                <?php Utils::deleteSession('error_login'); ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['login'])) : ?>
                <h3>Biemvenido | <?= $_SESSION['login']->Nombre; ?> <?= $_SESSION['login']->Apellidos; ?></h3>
                <a href="<?= base_url ?>usuario/loginOut"class="button button-red " style="width: auto !important;">Cerrar Sesion</a>
                <ul>                    
                    <?php if (isset($_SESSION['admin'])) : ?>
                        <li><a href="<?= base_url ?>pedido/gestion">Gestionar pedidos</a></li>
                        <li><a href="<?= base_url ?>categoria/index">Gestionar categorias</a></li>
                        <li><a href="<?= base_url ?>producto/gestion">Gestionar productos</a></li>
                    <?php else: ?>
                        <li><a href="<?= base_url ?>pedido/mis_pedidos">Mis pedidos</a></li>
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

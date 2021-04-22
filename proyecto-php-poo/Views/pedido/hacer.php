<?php if (isset($_SESSION['login'])): ?>
    <h1>Hacer Pedido</h1>
    <a href="<?= base_url ?>carrito/index">Ver Productos</a>
<?php else : ?>
    <h1>No ha Iniciado sesion</h1>
    <p>Necesitas iniciar la sesion en la web para poder realizar el pedido.</p>
<?php endif; ?>



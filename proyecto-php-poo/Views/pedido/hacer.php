<?php if (isset($_SESSION['login'])): ?>
    <h1>Hacer Pedido</h1>
    <a href="<?= base_url ?>carrito/index">Ver Productos</a>
    <h3>Direccion para el envia:</h3>
    <div class="forms_conteiner">
        <form action="<?= base_url ?>pedido/add" method="post">
            <input type="hidden" name="usuario_id" value="<?= $_SESSION['login']->Id; ?>"/>
            <label for="provincia">Provincia</label>
            <input type="text" name="provincia" placeholder="Digita tu provincia" required/>
            <label for="localidad">Localidad</label>
            <input type="text" name="localidad" placeholder="Digita tu localidad" required/>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" required placeholder="Digita tu direccion"/>
           
            <input type="submit" name="submit" value="Guardar"/>
        </form>
    </div>
<?php else : ?>
    <h1>No ha Iniciado sesion</h1>
    <p>Necesitas iniciar la sesion en la web para poder realizar el pedido.</p>
<?php endif; ?>



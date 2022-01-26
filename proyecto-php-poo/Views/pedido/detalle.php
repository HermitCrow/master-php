<h1>Detalles Pedidos</h1><br/>
<?php if (isset($pedido)): ?>
    <?php if (isset($_SESSION['admin'])) : ?>
        <h3>Cambiar estado del pedido</h3>
        
        <form action="<?= base_url ?>pedido/editiStatus" method="POST" >
            <input type="hidden" name="Id" value="<?= $pedidos->Id ?>" />
            <select name="status">
                <option value="CONFIRMADO" <?=$pedidos->Estado == "CONFIRMADO" ?'Selected': '' ?>>Pendiente</option>
                <option value="PREPARADO" <?=$pedidos->Estado == "PREPARADO" ?'Selected': '' ?>>En preparacion</option>
                <option value="LISTO" <?=$pedidos->Estado == "LISTO" ?'Selected': '' ?>>Preparado para enviar</option>
                <option value="ENVIADO" <?=$pedidos->Estado == "ENVIADO" ?'Selected': '' ?>>Enviado</option>
            </select> 
            <input type="submit" value="Eviar" />
        </form><br/>
    <?php endif; ?>
    <h3>Datos del Envio:</h3><br/>

    Povincia: <?= $pedidos->Provincia ?><br/>
    Ciudad: <?= $pedidos->Localidad ?><br/>
    Direccion: <?= $pedidos->Direccion ?><br/><br/>

    <h3>Datos del pedido:</h3><br/>
   
    Numero de pedido: <?= $pedidos->Id ?><br/>
    Estado del pedido: <strong><?= Utils::showStatus($pedidos->Estado) ?></strong><br/>
    Total a pagar: RD$ <?= $pedidos->Coste ?><br/>
    Productos: 
    <table>
        <?php
        while ($producto = $productos->fetch_object()):
            $ruta = Utils::EditName($producto->Imagen);
            ?>
            <tr>
                <td><img src="<?= base_url ?>Uploads/Imagen/<?= $ruta ?>/<?= $producto->Imagen ?>" class="img_carrito"/></td>
                <td><?= $producto->Nombre ?></td>
                <td>RD$ <?= $producto->Precio ?></td>
                <td><?= $producto->Unidades ?></td>

            </tr>
        <?php endwhile; ?>

    </table>
<?php endif; ?>       
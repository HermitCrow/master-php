<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == "Complet"): ?>
    <h1>Tu pedido confirmado</h1>
    <p>
        Tu pedido ha sido guardado con exito, una vez que realices la tranferencia 
        bancaria a la cuenta 745821356445 con el coste del pedido, sera procesado y enviado.
    </p>
    <br/>
    <?php if (isset($pedido)): ?>

        <h3>Datos del pedido:</h3>
        Numero de pedido: <?= $pedido->Id ?><br/>
        Total a pagar: RD$ <?= $pedido->coste ?><br/>
        Productos: 
        <table>
        <?php while ($producto = $productos->fetch_object()): 
            $ruta = Utils::EditName($producto->Imagen);
            ?>
            <tr>
                    <td><img src="<?= base_url ?>Uploads/Imagen/<?= $ruta ?>/<?= $producto->Imagen ?>" class="img_carrito"/></td>
                    <td><?= $producto->Nombre ?></td>
                    <td>RD$ <?= $producto->Precio ?></td>
                    <td><?= $pedido->Unidades ?></td>
                </tr>
        <?php endwhile; ?>
        </table>

    <?php endif; ?>
<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != "Complet"): ?>
    <h1>Tu pedido No ha podido procesarse</h1>
<?php endif; ?>

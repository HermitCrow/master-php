<h1>Carrito de la Compra</h1>
<?php if (isset($carrito) && count($_SESSION['carrito']) >= 1): ?>
    <table>
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($carrito as $indice => $dato) :
                $producto = $dato['producto'];
                $ruta = Utils::EditName($producto->Imagen);
                ?>            
                <tr>
                    <td><img src="<?= base_url ?>Uploads/Imagen/<?= $ruta ?>/<?= $producto->Imagen ?>" class="img_carrito"/></td>
                    <td><?= $producto->Nombre ?></td>
                    <td>RD$ <?= $producto->Precio ?></td>
                    <td>  
                        <?= $dato['unidad'] ?>
                        <div class="updown-unidades">
                            <strong><a href="<?= base_url ?>carrito/down&index=<?= $indice ?>"  class="button">-</a></strong>
                            <strong><a href="<?= base_url ?>carrito/up&index=<?= $indice ?>"  class="button">+</a></strong>
                        </div>
                    </td>
                    <td><a href="<?= base_url ?>carrito/remove&index=<?= $indice ?>"  class="button button-pagar button-red">Eliminar</a></td>
                </tr>

            <?php endforeach; ?>
            <?php $stats = Utils::statCarrito(); ?>

            <tr>

                <td></td>
                <td></td>
                <td><strong>Total</strong></td>
                <td><strong>Articulos</strong></td>
                <td></td>
            </tr>
            <tr>

                <td><strong>Total Productos</strong></td>
                <td></td>
                <td>RD$ <?= $stats['total'] ?></td>
                <td><?= $stats['count'] ?></td>
                <td></td>
            </tr>
        </tbody>            
    </table>
    <a href="<?= base_url ?>carrito/delete" class="button button-pagar button-red">Borra</a>
    <a href="<?= base_url ?>pedido/hacer" class="button button-pagar">Pagar</a>

<?php else : ?>
    <strong>No hay articulos registrado.</strong>
<?php endif; ?>


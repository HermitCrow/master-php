<h1>Carrito de la Compra</h1>
<?php if (isset($carrito)): ?>
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
                    <td><?= $dato['unidad'] ?></td>
                </tr>
             
        <?php endforeach; ?>
        <?php $stats = Utils::statCarrito();?>
               
                 <tr>
                    
                    <td></td>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td><strong>Articulos</strong></td>
                </tr>
                <tr>
                    
                    <td><strong>Total Productos</strong></td>
                    <td></td>
                    <td>RD$ <?=$stats['total']?></td>
                    <td><?=$stats['count']?></td>
                </tr>
    </tbody>            
    </table>
<?php else : ?>
    <strong>No hay articulos registrado.</strong>
<?php endif; ?>


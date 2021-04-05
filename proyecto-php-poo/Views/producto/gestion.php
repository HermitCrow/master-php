<h1>Gestíon de Productos</h1>
<a href="<?= base_url ?>producto/crear" class="button button-smail" style="float:right;">Crear</a>
<?php if (isset($_SESSION['crear']) && $_SESSION['crear'] == 'complete'): ?>
    <strong class="alert_green">El proceso se completado correctamente</strong>
<?php elseif (isset($_SESSION['crear']) && $_SESSION['crear'] == 'failed') : ?>
    <strong class="alert_red">El proceso no se ha completado correctamente.</strong>
<?php endif; ?>  

<?php Utils::deleteSession('crear'); ?>

<table>
    <tr>
        <th>
            Numero
        </th>            
        <th>
            Nombre
        </th>            
        <th>
            Precio
        </th>

        <th>
            Stock
        </th>            
    </tr>
    <?php if (isset($_SESSION['Producto']) && $_SESSION['Producto'] == 'Complete'): ?>
        <?php $p = 1; ?>
        <?php while ($producto = $productos->fetch_object()) : ?>
            <tr>   
                <td>
                    <?= $p . "</br>"; ?>
                </td><!-- Fin Id -->
                <td>
                    <?= $producto->Nombre . "</br>"; ?>
                </td><!-- Fin Nombre -->
                <td>
                    <?= $producto->Precio . "</br>"; ?>
                </td><!-- Fin Precio -->
                <td>
                    <?= $producto->Stock . "</br>"; ?>
                </td><!-- Fin Stock -->
                <td><a href="<?= base_url . "producto/detalle" . "&id=$producto->Id" ?>" class="button  button-smail button-info" >Detalle</a></td>
                <td><a href="<?= base_url . "producto/editar" . "&id=$producto->Id" ?>" class="button button-smail button-warnin">Editar</a></td>
                <td><a href="<?= base_url . "producto/eliminar" . "&id=$producto->Id" ?>" class="button  button-smail button-red" >Eliminar</a></td>
            </tr>
            <?php $p++; ?>
        <?php endwhile; ?>
    <?php else: ?>
        <strong class="alert_red">No hay productos registrados.</strong>
    <?php endif; ?>    
</table>


<?php if (isset($gestion) || isset($_SESSION['admin']) ): ?>
    <h1>Gestionar Pedidos</h1><br/>
    <?php if (isset($_SESSION['crear']) && $_SESSION['crear'] == 'complete'): ?>
    <strong class="alert_green" style="float: right">Se Actualizo el estado correctamente</strong><br/><br/>    
    <?php elseif (isset($_SESSION['crear']) && $_SESSION['crear'] == 'failed') : ?>
        <strong class="alert_red" style="float: right">Actualizacion Fallida </strong><br/><br/>
    <?php endif; ?>
    <?php Utils::deleteSession('crear'); ?>
<?php else : ?>
    <h1>Mis Pedidos</h1><br/>
<?php endif; ?>
<table>
    <thead>
        <tr>
            <th>N° Pedido</th>
            <th>Coste</th>
            <th>Fecha</th>
            <th>Estado</th>

        </tr>
    </thead>
    <tbody>
        <?php while ($ped = $pedidos->fetch_object()) : ?>            
            <tr>
                <td><a href="<?= base_url ?>pedido/detalle&Id=<?= $ped->Id ?>"><?= $ped->Id ?></a></td>
                <td>RD$ <?= $ped->Coste ?></td>
                <td><?= $ped->Fecha ?></td>
                <td><?= Utils::showStatus($ped->Estado) ?></td>
            </tr>

        <?php endwhile; ?>        
    </tbody>            
</table>
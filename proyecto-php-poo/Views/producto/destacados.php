<h1>Productos Destacados</h1>
<?php if ($productos->num_rows == 0): ?>
<strong class="alert_red">No hay productos registarados</strong> 
<?php else : ?>
    <?php while ($prod = $productos->fetch_object()): ?>
        <?php $getName = Utils::EditName($prod->Imagen); ?>        
        <div class="product">
            <a href="<?=base_url?>producto/listarOn&id=<?=$prod->Id?>">
            <img src="<?= base_url ?>Uploads/Imagen/<?= $getName ?>/<?= $prod->Imagen ?>"/>
            <h2><?= $prod->Nombre ?></h2>
            </a>
            <p>RD$ <?= $prod->Precio ?></p>
            <a href="<?= base_url ?>carrito/add&id=<?= $prod->Id ?>" class="button button-ver">Comprar</a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>


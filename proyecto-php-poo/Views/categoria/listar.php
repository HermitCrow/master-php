<h1><?=$cat->Nombre?></h1>
<?php if ($categoriasall->num_rows == 0): ?>
<strong class="alert_red">No hay productos registarados en esta categoria</strong> 
<?php else : ?>
    <?php while ($prod = $categoriasall->fetch_object()): ?>
        <?php $getName = Utils::EditName($prod->Imagen); ?>        
        <div class="product">
            <img src="<?= base_url ?>Uploads/Imagen/<?= $getName ?>/<?= $prod->Imagen ?>"/>
            <h2><?= $prod->Nombre ?></h2>
            <p>RD$ <?= $prod->Precio ?></p>
            <a href="#" class="button button-ver">Comprar</a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>


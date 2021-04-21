<?php if (isset($prod)): ?>
    <h1><?= $prod->Nombre ?></h1>
    <div id="detail-product"> 
        <div class="image">
            <?php if ($prod->Imagen != null) : ?>
                <?php $getName = Utils::EditName($prod->Imagen); ?><!-- Ediatando el nombre -->        
                <img src="<?= base_url ?>Uploads/Imagen/<?= $getName ?>/<?= $prod->Imagen ?>"/>
            <?php else : ?> 
                <img src="<?= base_url ?>assets/img/camiseta.pmg"/>            
            <?php endif; ?>
        </div>
        <div class="data">
            <h2 class="description"><?= $prod->Descripcion ?></h2>            
            <p class="price">RD$ <?= $prod->Precio ?></p>
            <a href="<?= base_url ?>carrito/add&id=<?= $prod->Id ?>" class="button">Comprar</a>
        </div>

    </div>
<?php else : ?>
    <h1>El Producto no existe.</h1>
<?php endif; ?>


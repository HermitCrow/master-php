<h1>Productos Destacados</h1>

<?php while ($prod = $productos->fetch_object()):?>
<?php $getName = Utils::EditName($prod->Imagen); ?>
<div class="product">
    <img src="<?=base_url?>Uploads/Imagen/<?=$getName?>/<?=$prod->Imagen?>"/>
    <h2><?=$prod->Nombre?></h2>
    <p>RD$ <?=$prod->Precio?></p>
    <a href="#" class="button">Comprar</a>
</div>
<?php endwhile;?>

</div>


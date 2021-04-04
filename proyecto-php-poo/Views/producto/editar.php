<h1>Editar Producto</h1> 
<?php if (isset($_SESSION['crear']) && $_SESSION['crear'] == 'complete'): ?>
    <strong class="alert_green">Se completado correctamente</strong>
<?php elseif (isset($_SESSION['crear']) && $_SESSION['crear'] == 'failed') : ?>
    <strong class="alert_red">Registro Fallido, Introduce bien los Datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('crear'); ?>
<?php $Categorias = Utils::showCategorias() ?>
<div class="forms_conteiner">
    <form  action="<?= base_url ?>producto/update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $prod->Id ?>"
               <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required placeholder="Digita el nombre el producto" value="<?= $prod->Nombre ?>"/><!-- Nombre -->
        <label for="descripcion">Descripcion</label>
        <textarea type="text" name="descripcion" rows="5" cols="10" required ><?= $prod->Descripcion ?></textarea><!-- Descripcion -->
        <label for="precio">Precio</label>
        <input type="text" name="precio" required value="<?= $prod->Precio ?>" /><!-- Precio -->
        <label for="stock">Stock</label>
        <input type="number" name="stock" required value="<?= $prod->Stock ?>" /><!-- Stock -->
        <label for="categoria_id">Categorias</label>
        <select name="categoria_id" required >

            <?php while ($cat = $Categorias->fetch_object()) : ?>
                <?php if ($cat->Id == $prod->categoria_id) : ?>
                    <option value="<?= $cat->Id ?>" selected ><?= $cat->Nombre ?></option>
                <?php else : ?>
                    <option value="<?= $cat->Id ?>" ><?= $cat->Nombre ?></option>
                <?php endif; ?>                
            <?php endwhile; ?>

        </select><!-- Categoria -->
        <label for="oferta">Oferta</label>
        <input type="text" name="oferta" value="<?= $prod->Oferta ?>"/><!-- Oferta -->
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" required value="<?= $prod->Fecha ?>" /><!-- Fecha -->
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen"/><!-- Imagen -->

        <div class="form-button">
            <input type="submit" value="Editar" name="submit"/>  
            <a href="<?= base_url ?>producto/gestion" class="button button-smail" >Volver</a>
        </div>

    </form>
</div>



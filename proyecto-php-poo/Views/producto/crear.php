<h1>Crear Producto</h1> 
<?php if (isset($_SESSION['crear']) && $_SESSION['crear'] == 'complete'): ?>
    <strong class="alert_green">Se completado correctamente</strong>
<?php elseif (isset($_SESSION['crear']) && $_SESSION['crear'] == 'failed') : ?>
    <strong class="alert_red">Registro Fallido, Introduce bien los Datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('crear'); ?>
<?php $Categorias = Utils::showCategorias() ?>
<div class="forms_conteiner">
    <form  action="<?= base_url ?>producto/save" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required placeholder="Digita el nombre el producto"/><!-- Nombre -->
        <label for="descripcion">Descripcion</label>
        <textarea type="text" name="descripcion" rows="5" cols="10" required ></textarea><!-- Descripcion -->
        <label for="precio">Precio</label>
        <input type="text" name="precio" required/><!-- Precio -->
        <label for="stock">Stock</label>
        <input type="number" name="stock" required/><!-- Stock -->
        <label for="categoria_id">Categorias</label>
        <select name="categoria_id" required >
            <option label="Selecciona un categoria" disabled selected></option>   
            <?php while ($cat = $Categorias->fetch_object()) : ?>
                <option value="<?= $cat->Id ?>"><?= $cat->Nombre ?></option>
            <?php endwhile; ?>

        </select><!-- Categoria -->
        <label for="oferta">Oferta</label>
        <input type="text" name="oferta" /><!-- Oferta -->
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" required/><!-- Fecha -->
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen"/><!-- Imagen -->

        <div class="form-button">
            <input type="submit" value="Crear" name="submit"/>  
            <a href="<?= base_url ?>producto/gestion" class="button button-smail" >Volver</a>
        </div>

    </form>
</div>



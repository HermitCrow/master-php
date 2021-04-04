<h1>Gestionar Categorias</h1>
<a href="<?= base_url ?>categoria/crear" class="button button-smail" style="float:right;">Crear</a>
<?php if (isset($_SESSION['categoria']) && $_SESSION['categoria'] == "complete") : ?>
    <strong class="alert_green">La operacion se completo correctamente. </strong>
<?php elseif (isset($_SESSION['categoria']) && $_SESSION['categoria'] == "failed") : ?>
<strong class="alert_red">La operacion no se completo correctamente. </strong>    
<?php endif; ?>
<?php Utils::deleteSession('categoria'); ?>    
<table>
    <tr>
        <th>
            Numero
        </th>
        <th>
            Categorias
        </th>
    </tr>
    <?php $c = 1;?>
    <?php while ($category = $categoriasall->fetch_object()) : ?>
        <tr>   
            <td>
                <?= $c . "</br>"; ?>
            </td>
            <td>
                <?= $category->Nombre . "</br>"; ?>
            </td>
            <td><a href="<?= base_url . "categoria/editar" . "&id=$category->Id" ?>" class="button button-smail button-warnin">Editar</a></td>
            <td><a href="<?= base_url . "categoria/eliminar" . "&id=$category->Id" ?>"  class="button  button-smail button-red" >Eliminar</a></td>
        </tr>
        <?php $c++;?>
    <?php endwhile; ?> 
</table>





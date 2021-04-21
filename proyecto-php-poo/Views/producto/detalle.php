<h1>Detalle Producto</h1>
<div>
    <?php $Categorias = Utils::showCategorias(); ?>
    <dl class="dl-horizontal">
        <dt>Nombre</dt>
        <dd><?= $prod->Nombre ?></dd>
        <dt>Descripcion</dt>
        <dd><?= $prod->Descripcion ?></dd>
        <dt>Precio</dt>
        <dd><?= $prod->Precio ?></dd><!-- comment -->
        <dt>Stock</dt>
        <dd><?= $prod->Stock ?></dd><!-- comment -->
        <?php while ($cat = $Categorias->fetch_object()) : ?>
            <?php if ($cat->Id == $prod->categoria_id): ?>
                <dt>Categoria</dt>
                <dd>
                    <?= $cat->Nombre ?>
                    <?php break; ?>
                </dd><!-- comment -->
            <?php endif; ?>
        <?php endwhile; ?>
        <dt>Oferta</dt>
        <dd><?= $prod->Oferta ?></dd>
        <dt>Fecha</dt>
        <dd><?= $prod->Fecha ?></dd><!-- comment -->       
    </dl>
    <span>
        <div>
            <a href="<?= base_url . "producto/editar" . "&id=$prod->Id" ?>" class="button button-warnin" style="margin: 373px;margin-bottom: auto; margin-top: auto;">Editar</a>
            <a href="<?= base_url ?>producto/gestion" class="button button-smail" style="margin: 536px;margin-top: -30px;margin-bottom: 17px">Volver</a>
        </div>
    </span>    
</div>
<div>
    <h4>Imagenes</h4>
    <?php if (!$prod->Imagen) : ?>
        <h5>La imagen no existe.</h5>
    <?php else : ?>
        <table>
            <tr>
                <th>Imagenes</th>
            </tr>

            <?php $getName = Utils::EditName($prod->Imagen); ?><!-- Ediatando el nombre -->

            <?php $gestor = is_dir('Uploads/Imagen/' . $getName) ? opendir('./Uploads/Imagen/' . $getName) : false; ?><!-- Abriendo el Directorio -->

            <?php if ($gestor)://Comprobando si esta abierto el directorio  ?> 

                <?php while (($image = readdir($gestor)) !== False)://Recorriendo el directorio   ?>

                    <?php if ($image != '.' && $image != '..')://Filtrando los datos residuales ?> 

                        <tr>
                            <td>
                                <img src="<?= base_url ?>Uploads/Imagen/<?= $getName ?>/<?= $image ?>" style="width:250px;height:auto;">
                            </td>
                        </tr> 

                    <?php endif; ?>
                <?php endwhile; ?>

            <?php endif; ?>
        </table>

    <?php endif; ?>
</div>

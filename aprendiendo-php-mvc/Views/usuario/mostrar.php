
<h1>Listado de Usuario</h1>
<?php while ($usuario = $model->fetch_object()): ?>

<dl class="dl-horizontal">
    <dt>Nombre</dt>
    <dd><?=$usuario->Nombre?></dd>
    <dt>Fecha</dt>
    <dd><?=$usuario->Fecha?></dd>
</dl>
<?php endwhile;?>
<h1>Crear Categorias</h1>

<form action="<?= base_url ?>categoria/save" method="post">
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required/>
        <?php if (isset($_SESSION['Error_categoria'])): ?>
            <strong class="alert_red"><?= $_SESSION['Error_categoria']; ?></strong>
            <?php Utils::deleteSession('Error_categoria'); ?>        
        <?php endif; ?>
    </div> 
    <div class="form-button">
        <input type="submit" value="Crear" name="crear"  />
        <a href="<?= base_url ?>categoria/index" class="button button-smail">Volver</a>
    </div>
</form>


<h1>Registrarse</h1>
<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
    <strong class="alert_red">Registro Fallido, Introduce bien los Datos</strong>
<?php endif; ?>
    <?php Utils::deleteSession('register');?>
<div>
    <form  action="<?= base_url ?>usuario/save" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required/><!-- Nombre -->
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required/><!-- Apellidos -->
        <label for="email">Email</label>
        <input type="email" name="email" required/><!-- Email -->
        <label for="password">Password</label>
        <input type="password" name="password" required/><!-- Password -->
        <input type="submit" value="Registrar" name="sibmit"/>

    </form>
</div>


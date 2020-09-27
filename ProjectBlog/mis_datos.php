<?php 
    //Redirection Inclutde
    require_once 'Include/redirection.php';
    //Header Include
    require_once 'Include/Header.php'; 
    //Database Connection
    require_once 'Include/connection.php';
    //Helper
    require_once 'Include/helpers.php';
    //Barra Lateral
    require_once 'Include/aside.php';
    
?>
<div id="main">
    <h1>My data</h1>
    <!-- Mostrar Errores -->
    <?php if(isset($_SESSION['complete'])) : ?>
    <div class="alert alert-exito">
        <?=$_SESSION['complete']; ?>
    </div>
    <?php elseif(isset($_SESSION['errors'] ['general'])) : ?>
    <div class="alert alert-error">
        <?=$_SESSION['errors'] ['general']; ?>
    </div>
    <?php endif; ?>

    <form method="post" action="actualizar_usuario.php">

        <input type="hidden" name="Id_Users" value="<?=$_SESSION['User']['Id']?>" />
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" value="<?=$_SESSION['User']['FirstName']?>" />
        <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'firstname') : ''; ?>

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" value="<?=$_SESSION['User']['LastName']?>" />
        <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'lastname') : ''; ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$_SESSION['User']['Email']?>" />
        <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'email') : ''; ?>

        <input type="submit" name="submit" value="Actualizar">

    </form>

</div>

<!--Fin principal-->
<?php require_once 'Include/footer.php';?>
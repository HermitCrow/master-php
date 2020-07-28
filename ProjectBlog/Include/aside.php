<!-- Barra lateral -->

<aside id="sidebar">
    <?php if(isset($_SESSION['User'])) : ?>
    <div id="user_login" class="blockaside">
        <h3>Welcome, <?= $_SESSION['User']['FirstName'].' '.$_SESSION['User']['LastName'];?></h3>
        <!-- Close session-->
        <a href="create_entrada.php" class="bottom bottom-green">Create Entradas</a>
        <a href="create_category.php" class="bottom">Create Category</a>
        <a href="cerrar.php" class="bottom bottom-orange">My Data</a>
        <a href="cerrar.php" class="bottom bottom-red">Close Session</a>
    </div>
    <?php endif; ?>
    <?php if(!isset($_SESSION['User'])) :?>
    <div id="login" class="blockaside">

        <h3>Identify yourself</h3>
        <?php if(isset($_SESSION['Error_login'])) : ?>
        <div class="alert alert-error">
            <h3><?=$_SESSION['Error_login'];?></h3>
        </div>
        <?php endif; ?>

        <form method="post" action="login.php">

            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Password</label>
            <input type="password" name="password" />

            <input type="submit" value="Login">

        </form>
    </div>
    <div id="register" class="blockaside">

        <h3>Register</h3>
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

        <form method="post" action="register.php">

            <label for="firstname">First Name</label>
            <input type="text" name="firstname" />
            <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'firstname') : ''; ?>

            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" />
            <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'lastname') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" />
            <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'email') : ''; ?>

            <label for="password">Password</label>
            <input type="password" name="password" />
            <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'password') : ''; ?>

            <input type="submit" name="submit" value="Register">

        </form>

    </div>
    <?php endif;?>
</aside>
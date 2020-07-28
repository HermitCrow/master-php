<?php require_once 'Include/redirection.php';?>
<?php require_once 'Include/Header.php'; ?>

<!-- Barra lateral -->
<?php require_once 'Include/aside.php'; ?>
<!-- Caja principal -->
<div id="main">
    <h1>Create Categories</h1>
    <p>
        Add new category.
    </p><br />
    <?php if(isset($_SESSION['Complete_Category'])) : ?>
    <div class="alert alert-exito">
        <?=$_SESSION['Complete_Category']; ?>
    </div>
    <?php endif; ?>
    <form action="save_category.php" method="POST">
        <label for="CategoryName">Category Name</label>
        <input type="text" name="CategoryName" />

        <?php if(isset($_SESSION['Error_Category_Name'])) : ?>
        <div class="alert alert-error">
            <?=$_SESSION['Error_Category_Name']; ?>
        </div>
        <?php endif; ?>

        <input type="submit" value="Create" />
    </form>
</div>
<!--Fin principal-->

<?php require_once 'Include/footer.php'; ?>
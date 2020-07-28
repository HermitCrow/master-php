<?php 
    require_once 'Include/redirection.php';
    require_once 'Include/Header.php'; 
    require_once 'Include/connection.php';
    require_once 'Include/helpers.php';
    
?>

<!-- Barra lateral -->
<?php require_once 'Include/aside.php'; ?>


<div id="main">
    <h1>Create entries</h1>
    <p>
        Add new Entries.
    </p><br />

    <form action="save_entries.php" method="post">
        <input type="hidden" name="Id_Users" value="<?=isset($_SESSION['User']['Id'])?>" />

        <label for="Title">Title</label>
        <input type="text" name="Title" />
        <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'Title') : ''; ?>

        <label for="Category">Category</label>
        <select name="Category">
            <?php
                $Categories = GetCategory($DataContext);                
                while ($Category = sqlsrv_fetch_array($Categories, SQLSRV_FETCH_ASSOC)) :  ?>

            <option value="<?=$Category['Id']?>">
                <?= $Category['Names']?>
            </option>

            <?php endwhile;?>

        </select>

        <label for="Descriptions">Descriptions</label>
        <textarea name="Descriptions" rows="19" cols="100"></textarea>
        <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'Descriptions') : ''; ?>

        <input type="submit" value="Publish" />

    </form>
</div>
<!--Fin principal-->

<?php require_once 'Include/footer.php';?>
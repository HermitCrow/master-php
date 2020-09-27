<?php
require_once 'Include/connection.php';
require_once 'Include/helpers.php'; 

?>
<?php require_once 'Include/Header.php'; ?>

<!-- Barra lateral -->
<?php require_once 'Include/aside.php'; ?>
<!-- Caja principal -->
<div id="main">

    <?php 
    if(isset($_GET)):
        $Inputs = GetAllInputs($DataContext,false,null); 
        $exist = false;    
        
        if(!empty($Inputs)) :
            while($Input = sqlsrv_fetch_array($Inputs, SQLSRV_FETCH_ASSOC)) :                
                $DateTime=$Input['InputDate']; 
                if($_GET['Id_Input'] == $Input['Id']):
                    $exist = true;                    
    ?>

    <form action="update_entries.php" method="post">
        <input type="hidden" name="Id_Users" value="<?=$_SESSION['User']['Id']?>" />
        <input type="hidden" name="Id_Input" value="<?=$Input['Id']?>" />

        <label for="Title">Title</label>
        <input type="text" name="Title" value="<?=$Input['Title'];?>" />
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
        <textarea name="Descriptions" rows="19" cols="100"><?=$Input['Descriptions'];?></textarea>
        <?php echo isset($_SESSION['errors']) ? MostrarErrors($_SESSION['errors'], 'Descriptions') : ''; ?>

        <input type="submit" value="Publish" />

    </form>
    <?php 
                endif;
            endwhile;
        endif;
    endif; ?>

</div>
<!--Fin principal-->

<?php require_once 'Include/footer.php'; ?>
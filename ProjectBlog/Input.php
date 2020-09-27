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
                if($_GET['Id'] == $Input['Id']):
                    $exist = true;                    
    ?>
    <h1><?=$Input['Title'];?></h1>
    <article class="article">


        <span class="date">
            <a href="category.php?Id=<?=$Input['Id_Category'];?>">
                <?=$Input['Category']?></a>
            <?=' | '.$DateTime->format('d-m-Y g:i a');?><?=' | By '.$Input['NameFull'];?></span>
        <p>
            <?=$Input['Descriptions'];?>
        </p></br>
        <?php if(isset($_SESSION['User']) && $_SESSION['User']['Id'] == $Input['Id_Users'] ): ?>
        <a href="edit_entries.php?Id_Input=<?=$Input['Id']?>" class="bottom bottom-orange">Edit entries</a>
        <a href="delete_entries.php?Id_Input=<?=$Input['Id']?>" class="bottom bottom-red float-right">Delete entries</a>

        <?php endif; ?>

    </article>
    <?php 
                endif;
            endwhile;
        endif;
        if($exist !== true):        
        ?>
    <article class="article">
        <a href="">
            <h2>No Existe Registros</h2>

            <p>
                Registrate Y publica en esta categoria.
            </p>
        </a>
    </article>
    <?php endif;
    endif;
    ?>

    <div id="ver-todas">
        <a href="entrada.php">Ver todas la entradas</a>
    </div>
</div>
<!--Fin principal-->

<?php require_once 'Include/footer.php'; ?>
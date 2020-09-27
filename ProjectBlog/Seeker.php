<?php
require_once 'Include/connection.php';
require_once 'Include/helpers.php'; 

?>
<?php require_once 'Include/Header.php'; ?>

<!-- Barra lateral -->
<?php require_once 'Include/aside.php'; ?>
<!-- Caja principal -->
<div id="main">
    <h1>Search: <?=$_POST['Seeker'];?> </h1>
    <?php 
    if(!isset($_POST['Seeker'])){
        header("Location: index.php");
    }
    if(isset($_GET)):
        $Inputs = GetAllInputs($DataContext,false,$_POST['Seeker']); 
        $exist = false;    
        
        if(!empty($Inputs)) :
            while($Input = sqlsrv_fetch_array($Inputs, SQLSRV_FETCH_ASSOC)) :                
                $DateTime=$Input['InputDate']; 
                if(!empty($Input)):
                    $exist = true;                    
    ?>
    <article class="article">
        <a href="Input.php?Id=<?=$Input['Id']?>">
            <h2><?=$Input['Title'];?></h2>
            <span class="date">
                <?=$Input['Category'].' | '.$DateTime->format('d-m-Y g:i a');?></span>
            <p>
                <?=substr($Input['Descriptions'],0,180)."...";?>
            </p>
        </a>
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
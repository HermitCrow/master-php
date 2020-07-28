<?php
require_once 'Include/connection.php';
require_once 'Include/helpers.php'; 

?>
<?php require_once 'Include/Header.php'; ?>

<!-- Barra lateral -->
<?php require_once 'Include/aside.php'; ?>
<!-- Caja principal -->
<div id="main">
    <h1>Latest entries</h1>
    <?php 
    if(isset($_GET)):
        $Inputs = GetInputs($DataContext,1000); 
        $exist = false;
          
        if(!empty($Inputs)) :
            while($Input = sqlsrv_fetch_array($Inputs, SQLSRV_FETCH_ASSOC)) :                
                $DateTime=$Input['InputDate']; 
                if($_GET['Id'] == $Input['CategoryId']):
                    $exist = true;
                    
    ?>
    <article class="article">
        <a href="">
            <h2><?=$Input['Title'];?></h2>
            <span class="date">
                <?=$Input['Category'].' | '.$DateTime->format('d-m-Y g:i a');?></span>
            <p>
                <?= substr($Input['Descriptions'],0,180)."...";?>
            </p>
        </a>
    </article>
    <?php 
                endif;
            endwhile;
        endif;
        if($exist !== true):?>
    <article class="article">
        <a href="">
            <h2>No Existe Registros</h2>

            <p>
                Registrate Y publica en esta categoria.
            </p>
        </a>
    </article>
    <?php  endif;
    endif;
    ?>

    <div id="ver-todas">
        <a href="">Ver todas la entradas</a>
    </div>
</div>
<!--Fin principal-->

<?php require_once 'Include/footer.php'; ?>
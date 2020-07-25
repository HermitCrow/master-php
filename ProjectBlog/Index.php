<?php require_once 'Include/Header.php'; ?>

<!-- Barra lateral -->
<?php require_once 'Include/aside.php'; ?>
<!-- Caja principal -->
<div id="main">
    <h1>Latest entries</h1>
    <?php 
        $Inputs = GetInputs($DataContext);
        if(!empty($Inputs)) :
            while($Input = sqlsrv_fetch_array($Inputs, SQLSRV_FETCH_ASSOC)) :                
                $DateTime=$Input['InputDate'];                
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
            endwhile;
        endif; ?>
    <div id="ver-todas">
        <a href="">Ver todas la entradas</a>
    </div>
</div>
<!--Fin principal-->

<?php require_once 'Include/footer.php'; ?>
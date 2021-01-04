
<h1>Listado de Notas</h1>
<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
        
            <th>Descripcion</th>
        
            <th>Fecha</th>
        </tr>
    </thead>    
    <tbody>
        <?php while ($nota = $notas->fetch_object()): ?>
        <tr>
            <td><?=$nota->Titulo?></td>
            <td><?=$nota->Descripcion?></td>
            <td><?=$nota->Fecha?></td>
       </tr>      
        <?php endwhile;?>
    </tbody>    
</table>




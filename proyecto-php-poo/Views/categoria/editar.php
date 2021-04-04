<h1>Editar Categorias</h1>

<form action="<?= base_url ?>categoria/update" method="post">
    <div>
        <input type="hidden" name="id" value="<?=$cat->Id?>"
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=$cat->Nombre?>" required/>
        
    </div> 
    <div class="form-button">
        <input type="submit" value="Editar" name="editar"  />
         <a href="<?= base_url ?>categoria/index" class="button button-smail" >Volver</a>
    </div>
</form>


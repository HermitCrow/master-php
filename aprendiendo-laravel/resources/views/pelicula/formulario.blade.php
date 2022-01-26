<h1>Fromulario en laravel</h1>
<form action="{{route('peliculas.formularioRequest')}}" method="post">
    @csrf
    <label for="firstname">Nombre</label>
    <input type="text" name="firstname" id=""></br><br>
    <label for="lastname">Apellido</label>
    <input type="text" name="lastname" id=""><br><br>
    <input type="submit" value="Guardar">
</form>
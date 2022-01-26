@if (isset($fruta) && is_object($fruta))
    <h1>Editar nueva fruta</h1>
@else
    <h1>Crear nueva fruta</h1>
      
@endif
<form action="{{isset($fruta) ? route('frutas.update') : route('frutas.save')}}" method="POST">
    @csrf
    @if (@isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{$fruta->Id ?? ''}}">    
    @endif
    <label for="frutaName">Nombre</label>
    <input type="text" id="frutaName" name="frutaName" placeholder="Dijite el nombre de una fruta Por favor" value="{{$fruta->nombre ?? ''}}"><br><br>
    <label for="descipcion">Descipcion</label><br>
    <textarea id="descipcion" name="descipcion" cols="30" rows="10" placeholder="Dijite una breve descripcion">{{$fruta->descripcion ?? ''}}</textarea><br><br>
    <label for="precio">Precio</label>
    <input type="text" id="precio"  name="precio" placeholder="Dijite el precio del producto" value="{{$fruta->precio ?? ''}}"><br><br>
    <input type="date" name="fecha" value="{{$fruta->fecha ?? ''}}" ><br><br>
    <input type="submit" value="Guardar">
</form>  

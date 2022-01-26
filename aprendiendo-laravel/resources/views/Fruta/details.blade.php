<h1>{{$frutas->nombre}}</h1>
<p>
    {{$frutas->descripcion}}
</p>
<a href="{{route('frutas.delete',['id'=> $frutas->Id])}}">Eliminar</a>
<a href="{{route('frutas.edit',['id'=> $frutas->Id])}}">Actualizar</a>
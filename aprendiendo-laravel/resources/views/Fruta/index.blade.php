<h1>Listado de frutas</h1>
<h3><a href="{{route('frutas.create')}}">Crear fruta</a></h3>
@if (session('status'))
    <p style="background: green;">
    {{session('status')}}
    </p>
@endif
<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a href="{{route('frutas.details', ['id'=> $fruta->Id])}}">{{$fruta->nombre}}</a>
        </li>
    @endforeach
</ul>
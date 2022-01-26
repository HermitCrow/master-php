@include('include.header') 
<table border="1" >
    <thead>
        <tr>
            <th colspan="2" >Peliculas</th>
            <th>Año</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listado as $indice => $data)
        <tr>
            <td colspan="2" >
               
                {{$data['nombre'] ?? 'No Hay peliculas.'}}
                
            </td>
            <td>
              {{$data['year'] ?? 'No Hay Fecha.'}}  
            </td>            
        </tr>
        @endforeach        
<!--        <tr>
    
            <td> 
                @if (isset($dd) === 'Juana')
                {{ $dd ?? 'Juana' }}
                @elseif(count($listado) >= 1)
                {{ $dd ?? 'Juana' }}
                @else
                {{count($listado)}}
                @endif
            </td>  
        </tr>-->
    </tbody>
</table>

@include('include.footer')
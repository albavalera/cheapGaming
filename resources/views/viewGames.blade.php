@extends('layouts.app')
@section('content')
<div class ="container">
    <h3>Nuestros Juegos</h3>
    <div>
        <table>

     @foreach($juego as $juegos)

            <hr>
            
       @if($juegos->Oferta == 'S')
            <div id="inf-juego" style="border-color:red;border-style: solid;border-size:2px" >
                <tr><td><a href="{{route('juego.show',['id'=>$juegos->id])}}"><img src="{{ asset('storage/'.$juegos->imagen)}}" height="200px" width="160px"></a></td> </tr>
                           
       @else              
         <div id="inf-juego">
         <tr> <td> IMAGEN{{$juegos->Imagen}} €</td> </tr>
       
       @endif
         </div>
               <tr> <td>{{$juegos->Nombre}}</td> </tr>
               <tr> <td>{{$juegos->Precio}} €</td>   </tr>
              <tr> <td>{{$juegos->Tipo}}</td>   </tr>

            @endforeach

        </table>
    </div>

</div>


@endsection

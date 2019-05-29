@if($juego->Tipo == 'Origin') 
<link href="{{ asset('css/Origin-css.css') }}" rel="stylesheet">
@elseif($juego->Tipo == "PC")
<link href="{{ asset('css/PC-css.css') }}" rel="stylesheet">

@elseif ($juego->Tipo == "Origin")
@endif
<script type="text/javascript" src="{{ asset('js/jquery-1.6.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/viewBuyGames.js') }}"></script>

@extends('layouts.app')
@section('content')
<div class="menu-left">
    <h3>Plataformas</h3>
    <hr style="background-color:white;">

    <div class="div1-1"><img src="{{ asset('storage/steam.png') }}" height="20px" width="20px"> Steam</div>

    <div class="desple-1">

    </div>
    <div class="div1-2">Origin</div>
    <div class="desple-2">

    </div>
    <div class="div1-3"> 
        Uplay</div>
    <div class="desple-3">
        <a href="">Uplay</a>
    </div>

</div>

<div class="container1">   
    <h1>{{$juego->Nombre}} - {{$juego->Tipo}} - PC</h1>
    <div class="row mb-5">       
        <div class="col-md">        
            <div class="card">
                <div class="Imagen">
                    <img src="{{ asset('storage/'.$juego->imagen)}}" height="377px" width="271px">
                </div>
                <div class="Precio">
                    {{$juego->Precio}} €
                </div>
                <div class="Comprar">
                    <a href="{{route('addToCart.index',['id' =>$juego->id])}}" class="btn btn-danger"><i class="fas fa-shopping-cart"></i> Añadir al carrito </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title" >{{$juego->Nombre}}</h4>
                    <br>
                    <h5 class="card-Info" >Infomación: </h5>
                    <p class="card-text">{{$juego->Info}}</p>
                    <h5 class="card-Info" >Video: </h5>

                </div>

                <div class="video">

                    {!!$juego->Vidurl!!}

                </div>




            </div>      


        </div>

    </div>


    @endsection

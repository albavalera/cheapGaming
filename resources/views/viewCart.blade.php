@extends('layouts.app')
@section('content')
@if(Session::has('cart'))
<link href="{{ asset('css/Cart-css.css') }}" rel="stylesheet">

<div class="Precio-total">
    <p>TOTAL</p> 
    <hr>
    @if ($products != null)
    {{$totalPrice}} €
    @else
        VACIO
    @endif
    
    <br>
    <a href="{{route('payCart')}}" class="btn btn-danger">Lo quiero ya!</a>
</div>

<div>
    @if($products == null)
    <div class="container-EmptyCart">
        Su &nbsp;carrito &nbsp; se &nbsp;encuentra &nbsp;actualmente vacio
       <img src="{{ asset('storage/carritoVacio.png')}}" height="430px" width="400px">

        </div>
        @else

        @foreach($products as $product)
<div class="card">
  <h5 class="card-header" ><img src="{{ asset('storage/'.$product['item']['imagen'])}}" height="107px" width="80px">&nbsp;&nbsp;&nbsp; {{$product['item']['Nombre']}}
</h5>
  <div class="card-body">
      <div class="title-price">Precio</div>
      <div class="title-price"> Cantidad</div><br>
      <hr>
    <p class="Precio">{{$product['item']['Precio']}} €</p>
    <p class="Cantidad">{{$product['qty']}}</p><br>
     <a class="borrar" href="{{route('deleteToCart.index',['id' =>$product['item']])}}" class="btn btn-danger"><i class="fas fa-trash"></i> &nbsp Eliminar</a>
  </div>
   </div>

    @endforeach 
    <hr>
           
       
    @endif
</div>

@endif
@endsection
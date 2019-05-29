@extends('layouts.app')
@section('content')
<link href="{{ asset('css/payCart-css.css') }}" rel="stylesheet">


@if (isset($orderUser))
@if ($orderUser != null && $orderEmail != null && $totalPrice != null)
@if(Session::has('flash_message'))
{{Session::get('flash_message')}}
@endif
<h3>Pedido Realizado con Exito</h3>
Compra:

{{$orderUser}} {{ $orderEmail}} 
<br>{{$totalPrice}} 

@endif
@else

@if ($products == null)
No has comprado nada pipa


@else

<div class="card">

    <h2>Resumen del pedido</h2>
    @foreach($products as $product)
    <table>       
        <tr>
            <td><img src="{{ asset('storage/'.$product['item']['imagen'])}}" height="107px" width="80px">&nbsp;&nbsp;{{$product['item']['Nombre']}}
            </td>
            <td>
                x{{$product['qty']}}
            </td>
            <td>
                {{$product['item']['Precio']}} €
            </td>
        </tr>
    </table>
    @endforeach 

    <hr>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td style="padding-left:90px;"> Total:{{$totalPrice}}€</td>

        </tr>
    </table>

    <div class="btn">   
        <a href="{{route('Pay1')}}" class="btn btn-info">Realizar Pago</a>
    </div>

</div>

@endif
@endif









@endsection
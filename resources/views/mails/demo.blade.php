
<p>Gracias por tu transacción reciente en CheapGaming.

<p>
    <b>Nombre de la cuenta:</b> {{ $orderUser }} <br>
    <b> Factura:</b> 2721757829535607066	IVA (21 %)<br>
    <b> Fecha de emisión:</b> {{$date}} CET <br>
    <b>Dirección de facturación:</b> Madrid, España<br>
    <b>Dirección de correo:{{ $orderEmail}}</b>
</p>


<p><u>Productos adquiridos:</u></p>

<div>
    @foreach($products as $product)
    <p><b>Nombre del artículo:</b>&nbsp; {{$product['item']['Nombre']}} &nbsp; {{$product['item']['Precio']}}€</p>
    
    @endforeach
      Total:	{{ $totalPrice}}€
</div>

Thank,
<br/>
<i></i>

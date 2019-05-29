<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script type="text/javascript" src="{{ asset('js/jquery-1.6.4.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/welcome.js') }}"></script>

        <title>CheapGaming - Todos los juegos al mejor precio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            @font-face {
                font-family: 'Proto';
                src: url('../fonts/FacileSans.otf');
            }
            @font-face {
                font-family: 'Suissnord';
                src: url('../fonts/Suissnord.otf');
            }
            @font-face {
                font-family: 'mirror';
                src: url('../fonts/mirror.otf');
            }     
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 1600px;
                margin: 0;
                background-image: linear-gradient(to  right, #450007,#6f0c16,#982727,#982727,#6f0c16,#450007);    
                background-size:cover;
            }
            div{
                border-color:blue;
                border-style:solid;
                border-size:1px;
            }
            .full-height {
                height: 1600px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                z-index: 1;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                width: 30px;
                height: 30px;
                z-index: 99;
                background-image: url('storage/menu.png');
                background-size: cover;

            }
            #menu-bar{
                position: absolute;
                right: -1px;
                width: 12%;
                height: 100%;
                background-color: white;
                margin-top: 20px;
                top:0;
                display:none ;
                z-index: 98;

            }

            .content {
                text-align: left;
                width: 100%;
                height: 1000px;

            }

            .title {
                font-size: 84px;
                text-align: center;

            }
            .titlem-b-md{
                background-image: linear-gradient(to left, #403d3d,black,black,black);
                border-color: yellow;
                border-style: solid;
                height:100px;
                width: 100%;
            }
            .title-img{
                /*   background-image: url('storage/head-img.jpg');*/
                background-size: 400px;
                background-position: center;
                background-repeat: no-repeat;
                height:100px;
                width: 100%;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .Juegos-PC{
                padding-top: 10px;
                margin-top: 40px;
                height:275px;
                width: 100%;
                background-image: linear-gradient(to bottom right, #000033,#040045,#000033);

            }
            .Juegos-ORIGIN{
                margin-top: 10px;
                height:275px;
                width: 100%;
                background-image: linear-gradient(to bottom right, Orange, yellow);



            }
            .Juegos-Uplay{
                padding-top: -10px;
                margin-top: 10px;
                background-image: linear-gradient(to bottom right, #4396fa, #068bf8, #4396fa);
                height:275px;
                width: 100%;


            }

            img{
                height:190px;
                width: 180px;
                margin-top: 10px;
                margin-left: 10px;
                margin-bottom: 5px;
                border-radius:2px;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                opacity: 0.95;

            }
            img:hover{
                opacity: 1;
            }

            .Juego-PC-img{

                height:245px;
                width: 180px;
                display: inline-block;
                margin-right: 20px;
                margin-left: 10px;
                margin-top: -10px;


            }

            .Juego-ORIGIN-img{
                height:245px;
                width: 180px;
                display: inline-block;
                margin-right: 20px;
                margin-left: 10px;
            }
            .Juego-Uplay-img{
                height:245px;
                width: 180px;
                display: inline-block;
                margin-right: 20px;
                margin-left: 10px;

            }

            button{
                margin-left:50px;
            }
            .PC-Plataform{
                background-image: linear-gradient(to top right, #000033,#040045,#000033);
                height:100px;
                border-color:yellow;


            }
            .PC-Plataform-PC{
                text-align:center;
                margin-top:-100px;


            }


            #steam{
                height: 60px;
                width: 60px;
                box-shadow: 0px 0px ;
                opacity: 0.75;
            }
            #steam:hover{
                height: 60px;
                width: 60px;
                box-shadow: 0px 0px ;
                opacity: 1;
            }


            .Origin-Plataform{

                background-image: linear-gradient(to bottom right, #ff9900 , yellow);
                margin-top:10px;
                height:100px;
                border-color:yellow;
                clear: left;
            }
            .Uplay-Plataform{
                border-style:solid;
                border-color:#0056b3;
                background-image: linear-gradient(to bottom right, #4396fa, #068bf8, #4396fa);
                margin-top:10px;
                height:100px;

                clear: left;
            }
            .Footer{
                background-image: linear-gradient(to bottom right, #000, #212522);
                height: 90px;
                width:100%;

            }
            .redes{
                float:right;
            }
            
            .redes img{
                height: 40px;
                width: 40px;
                box-shadow: 0px 0px ;
                
            }
        </style>
    </head>
    <body>
        <div class="titlem-b-md">
            <div class="title-img"></div>
        </div>

        @if (Route::has('login'))
        <div id="menu-bar" > 


            <hr>   
            @auth
            <a href="{{ url('/home') }}">Home</a><br>
            <span>  <a href="{{ route('cart.show') }}"><i class="fas fa-shopping-cart"></i>Mi carrito: {{Session::has('cart') ? Session::get('cart')->totalQty:''}}</a></span>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth

            <hr>
        </div>

        <div class="top-right links" >
        </div>
        @endif

        <div class="content">
            <div class="PC-Plataform"></div>
            <div class="PC-Plataform-PC">
                <a  href=""><img id="steam" src="{{ asset('storage/steam.png')}}"></a><br> 
            </div>
            <div class="Juegos-PC"> 
                @foreach($juego as $juegos)
                <div class="Juego-PC-img">
                    @if ($juegos->Tipo != 'C')               
                    <a href="{{route('juego.show',['id'=>$juegos->id])}}"><img src="{{ asset('storage/'.$juegos->imagen)}}"></a><br> 
                    <a href="{{route('juego.show',['id'=>$juegos->id])}}"><button type="button" class=" btn btn-danger">Comprar</button></a>

                </div>
                @endif
                @endforeach      
            </div>
            <div class="Origin-Plataform">

            </div>
            <div class="Juegos-ORIGIN">
                @foreach($juego as $juegos)
                <div class="Juego-ORIGIN-img">
                    @if ($juegos->Tipo != 'x')               
                    <a href="{{route('juego.show',['id'=>$juegos->id])}}"><img src="{{ asset('storage/'.$juegos->imagen)}}"></a><br> 
                    <a href="{{route('juego.show',['id'=>$juegos->id])}}"><button type="button" class=" btn btn-danger">Comprar</button></a>

                </div>
                @endif
                @endforeach
            </div>

            <div class="Uplay-Plataform"></div>
            <div class="Juegos-Uplay">
                @foreach($juego as $juegos)
                <div class="Juego-Uplay-img">
                    @if ($juegos->Tipo == 'PC')               
                    <a href="{{route('juego.show',['id'=>$juegos->id])}}"><img src="{{ asset('storage/'.$juegos->imagen)}}"></a><br> 
                    <a href="{{route('juego.show',['id'=>$juegos->id])}}"><button type="button" class=" btn btn-danger">Comprar</button></a>

                </div>
                @endif
                @endforeach

            </div>

        </div>

        <div class="Footer">
            Copyright © 2005 - 2019 Cheap Gaming -Cheap Gaming Ltd - España
            <div class="redes">
                
                Siguenos en nuestras redes:
               <a><img src="{{ asset('storage/facebook.png')}} "></a>
               <a><img src="{{ asset('storage/')}}"></a>
                   
            </div>

        </div>
    </body>
</html>

@extends('layouts.app')
@section('content')
<div class ="container">
    <h3> Introducir Nuevo Juego</h3>
    <form method="post" action="{{ url('/juego.store')}}" enctype="multipart/form-data">
       {{csrf_field() }}
       <label for="description">:</label>
       <input type="text" name="marca"
               value="{{old('marca')}}" required autofocus />
       <label for="description">Modelo:</label>
       <input type="text" name="modelo"
               value="{{old('modelo')}}" required autofocus />
       <label for="description">Color:</label>
       <input type="text" name="color"
               value="{{old('color')}}" required autofocus />
       <br><br>
       <label for="description">Imagen:</label>
       <input type="file" name="imagen" id="imagen"/>
     
       
     <!--  @if ($errors->has('imagen'))
            <span class ="help-block">
                <strong>{{$errors->first('imagen')}}</strong>
            </span>
       @endif
     -->
       <button type="submit" class="btn btn-primary" >Insertar</button>
       
    </form>    
</div>


@endsection

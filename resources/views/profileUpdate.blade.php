@extends('layouts.app')
@section('content')

<link href="{{ asset('css/profile-css.css') }}" rel="stylesheet">

<h2>Pefil</h2>
<h3>Actualiza tus datos personales</h3>
<form method="POST"  action="{{ route('profile.update') }}">
    @method('PUT')
    @csrf
    <label>Nombre</label>
    <input type="text" name="name" value="{{$user->name}}"></br>
    <label>Correo Electronico</label>
    <input type="text" name="email" value="{{$user->email}}"></br>
    <label>Contraseña</label>
    <input type="password" name="password" value="{{$user->password}}"></br>
    <label>Telefono</label>
    <input type="text" name="phone" value="{{$user->phone}}"></br>
   
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
@endsection
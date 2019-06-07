@extends('layouts.app')
@section('content')

<link href="{{ asset('css/profile-css.css') }}" rel="stylesheet">

<h2>Pefil</h2>
<h3>Tus datos personales</h3>

    <label>Nombre</label>
    <div class="form-group">
        <span>{{$user->name}}</span>
    </div>
    <label>Correo Electronico</label>
    <div class="form-group">
        <span>{{$user->email}}</span>
    </div>
    <label>Sexo</label>
    <div class="form-group">
        <span>{{$user->sex}}</span>
    </div>
    <label>Teléfono</label>
    <div class="form-group">
        <span>{{$user->phone}}</span>
    </div>        
    <a class="btn btn-primary" href="{{ route('profile.edit') }}">Modificar</a>
@endsection
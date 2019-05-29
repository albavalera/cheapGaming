@extends('layouts.app')
@section('content')

<link href="{{ asset('css/profile-css.css') }}" rel="stylesheet">

<h2>Pefil</h2>
<h3>Tus datos personales</h3>
<form>
    <label>Nombre</label>
    <input type="text" value="{{$name}}"></br>
    <label>Correo Electronico</label>
    <input type="text" value="{{$email}}">
    
</form>
@endsection
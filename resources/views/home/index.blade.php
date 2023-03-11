@extends('layouts.app-master')

@section('content')
    <br>

    <h1>
        <b>HOME</b>
    </h1>
    <br>

    @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}!, estas autenticado</p>

    @endauth

    @guest
        <p>Para el contenido <a href="{{route('login')}}">Inicia Sesion</a></p>
    @endguest

@endsection
    

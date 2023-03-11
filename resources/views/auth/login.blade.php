@extends('layouts.auth-master')

@section('content')

    <form action="{{route('login')}}" method="POST">
        @csrf

        <h1 style="text-align:center;">LOGIN</h1>
        <br>

        @include('layouts.partials.messages')

        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password :</label>
        </div>
        <div style="text-align:center;" class="row g-2">
            <div  class="col-md">
                <div class="mb-3">
                    <a style="width:100%; border-radius:10px;" class="btn btn-outline-success" href="{{route('register')}}">Crear Cuenta</a>
                </div>
            </div>
            <div class="col-md">
                <button style="width:100%; border-radius:10px;" type="submit" class="btn btn-primary">Iniciar Sesion</button>
            </div>
        </div>
    </form>

@endsection
@extends('layouts.auth-master')

@section('content')

    <form action="{{route('register')}}" method="POST">
        @csrf

        <h1 style="text-align:center;">CREAR CUENTA</h1>
        <br>

        @include('layouts.partials.messages')

        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
            <label for="floatingInput">Email :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Confirmar password :</label>
        </div>
        <div style="text-align:center;">
            <button style="width:50%; border-radius:10px;" type="submit" class="btn btn-primary">Registrarse</button>
        </div>
        <br>
        <div style="text-align:center;" class="row g-2">
            <div  class="col-md">
                <label for="exampleInputEmail1" class="form-label">Ya tienes una cuenta?</label>
                <div class="mb-3">
                    <a style="border-radius:10px;" class="btn btn-outline-success" href="{{route('login')}}">Inicia Sesion</a>
                </div>
            </div>
        </div>
    </form>

@endsection
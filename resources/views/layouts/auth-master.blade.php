<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion del login</title>
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">

    <style>
        body{
            width: 100%;
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container{
            width: 450px;

        }
    </style>
</head>
<body>
    <br>
    <main class="form-container">
        @yield('content')
    </main>

    <script src="{{url('/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
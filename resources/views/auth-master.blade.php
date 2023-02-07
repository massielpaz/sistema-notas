<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistama de notas</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/solid.css') }}" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
    <link href="{{ asset('css/login-template.css') }}" rel="stylesheet">
</head>

<body>
    <div class="col-lg-8 mx-auto p-4 py-md-5">
        <main>
            @section('content')
            @show
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            <i class="fa-solid fa-user-graduate"></i> Creado por estudiantes de UML Sede Ocotal con mucho ❤️ © 2023
        </footer>
    </div>
    <script src="{{ asset('boostrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
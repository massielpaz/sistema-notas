<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistama de notas | @yield('titulo')</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/login-template.css') }}" rel="stylesheet">
</head>

<body>
    <div class="col-lg-8 mx-auto p-4 py-md-5">
        <main>
            @section('content')
            @show
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            UML NOTAS &middot; &copy; 2023
        </footer>
    </div>
    <script src="{{ asset('boostrap/js/bootstrap.min.js') }}"></script>
</body>

</html>

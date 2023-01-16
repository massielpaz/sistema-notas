<?php
// El año actual es usado para el footer de la pagina, define el copyrigth de la pagina.
$anio = date("Y");

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Inicio de sesion sistema notas</title>
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
    <meta name="theme-color" content="#712cf9">

    <link href="/css/login.css" rel="stylesheet">

</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form>
            <img class="mb-4" src="/img/logo_uml.png" height="300">
            <h1 class="h3 mb-3 fw-normal">Por favor iniciar sesión</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="est@uml.edu.ni">
                <label for="floatingInput">Correo Electronico</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            <p class="mt-5 mb-3 text-muted">&copy; <? echo $anio; ?></p>
        </form>
    </main>


</body>

</html>
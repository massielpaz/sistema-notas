<?php
// El año actual es usado para el footer de la pagina, define el copyrigth de la pagina.
$anio = date("Y");


// Guardamos los datos del POST dentro de una variable, en caso de que no llame el archivo como un POST
// esta variable estara vacia.
$datos_post = filter_input_array(INPUT_POST);

// Los datos del POST existen, se comprueban en la base de datos
if ($datos_post) {
    var_dump($datos_post);

?>
    <!doctype html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Comprobando usuario</title>
        <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta name="theme-color" content="#712cf9">
    </head>

    <body>
        <main class="form-signin w-100 m-auto">
            <h1>WIP</h1>
        </main>
    </body>

    </html>
<?php
    // Salimos del archivo (Evita que se muestre el codigo que sigue)
    exit();
}

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Inicio de sesion sistema notas</title>
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">

    <link href="/css/login.css" rel="stylesheet">

</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="/login.php" method="POST">
            <img class="mb-4" src="/img/logo_uml.png" height="300">
            <h1 class="h3 mb-3 fw-normal">Por favor iniciar sesión</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="est@uml.edu.ni" autocomplete="off">
                <label for="floatingInput">Correo Electronico</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" autocomplete="off">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            <p class="mt-5 mb-3 text-muted">&copy; <? echo $anio; ?></p>
        </form>
    </main>


</body>

</html>
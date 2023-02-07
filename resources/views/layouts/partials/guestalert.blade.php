<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading"><i class="fa-solid fa-triangle-exclamation"></i> Iniciar sesion</h4>
    <p>Por favor ingresa al sistema para poder usar todos los modulos</p>
    <hr>
    <p class="mb-0">
    <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
        <a href="{{ route('login.perform') }}" class="btn btn-success"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar sesion</a>
        <a href="{{ route('register.perform') }}" class="btn btn-warning"><i class="fa-solid fa-key"></i> Registrarse</a>
    </div>
    </p>
</div>
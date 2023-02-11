<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="{{ route('materias.index') }}" class="nav-link px-2 text-white"><i class="fa-solid fa-book"></i> Materias</a></li>
                <li><a href="{{ route('estudiante.index') }}" class="nav-link px-2 text-white"><i class="fa-solid fa-graduation-cap"></i> Estudiantes</a></li>
                <li><a href="{{ route('docentes.index') }}" class="nav-link px-2 text-white"><i class="fa-solid fa-chalkboard-user"></i> Docentes</a></li>
                <li><a href="{{ route('notas.index') }}" class="nav-link px-2 text-white"><i class="fa-solid fa-star"></i> Notas</a></li>
            </ul>
            @auth
            {{auth()->user()->name}}
            <div class="text-end">
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar sesion</a>
            </div>
            @endauth

            @guest
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar sesion</a>
                <a href="{{ route('register.perform') }}" class="btn btn-warning"><i class="fa-solid fa-key"></i> Registrarse</a>
            </div>
            @endguest
        </div>
    </div>
</header>
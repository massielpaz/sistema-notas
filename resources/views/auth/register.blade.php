@extends('auth-master')

@section('content')
<section class="text-center text-lg-start">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5"><i class="fa-regular fa-bell"></i> Registrate ahora</h2>
                        <form method="post" action="{{ route('register.perform') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" required="required" autofocus autocomplete="off" />
                                        <label class="form-label" for="username"><i class="fa-solid fa-user"></i> Nombre de usuario</label>
                                        @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="required" autocomplete="off" />
                                <label class="form-label" for="email"><i class="fa-solid fa-envelope"></i> Correo electronico</label>
                                @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" required="required" />
                                        <label class="form-label" for="password"><i class="fa-solid fa-key"></i> Contraseña</label>
                                        @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required="required" />
                                        <label class="form-label" for="password_confirmation"><i class="fa-solid fa-key"></i> Confirmar contraseña</label>
                                        @if ($errors->has('password_confirmation'))
                                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Ya tienes una cuenta? <a href="{{ route('login.perform') }}" style="color: #393f81;">Inicia sesión aqui</a></p>
                            <button type="submit" class="w-100 btn btn-lg btn-primary btn-block mb-4">
                                <i class="fa-solid fa-right-to-bracket"></i> Registrarse
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="{{ asset('img/logo_uml.png') }}" class="w-100 rounded-4 shadow-4" alt="Logo" />
            </div>
        </div>
    </div>
</section>
@endsection
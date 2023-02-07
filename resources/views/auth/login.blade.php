@extends('auth-master')

@section('content')
<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="{{ asset('img/logo_uml.png') }}" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; padding: 15px;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="post" action="{{ route('login.perform') }}">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    <div class="d-flex align-items-center mb-3 pb-1" style="display: none !important;">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Logo</span>
                                    </div>

                                    @include('layouts.partials.messages')

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><i class="fa-solid fa-shield"></i> Ingresa en tu cuenta usando tu correo y contraseña</h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg" name="username" value="{{ old('username') }}" required="required" autofocus autocomplete="off" />
                                        <label class="form-label" for="username"><i class="fa-solid fa-envelope"></i> Correo electronico o usuario</label>
                                        @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" value="{{ old('password') }}" required="required" class="form-control form-control-lg" autocomplete="off" />
                                        <label class="form-label" for="password"><i class="fa-solid fa-lock"></i> Contraseña</label>
                                        @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar sesion</button>
                                    </div>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes una cuenta? <a href="{{ route('register.perform') }}" style="color: #393f81;">Registrate aqui</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

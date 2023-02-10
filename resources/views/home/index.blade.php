@extends('app-master')

@section('content')
<br>
<div class="bg-light p-5 rounded">
    <div class="row">
        <div class="col">
            <img class="img-fluid mx-auto d-block" src="{{ asset('img/logo_uml.png') }}" alt="logo" width="190" height="190" />
        </div>
    </div>
    <br>
    @auth
    <h1><i class="fa-solid fa-gamepad"></i> Centro de control</h1>
    <div class="row">
        @foreach ($paginas as $pagina)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $pagina['nombre'] }}</h5>
                    <p class="card-text text-center" style="font-size: 5em;">
                    <i class="fa-solid {{ $pagina['icono'] }}"></i>
                    </p>
                    <a href="{{ route($pagina['ruta']) }}" class="btn btn-primary"><i class="fa-solid fa-circle-arrow-right"></i> Ver modulo</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
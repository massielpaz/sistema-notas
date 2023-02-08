@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2><i class="fa-solid fa-graduation-cap"></i> Agregar nuevo estudiante</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('estudiante.index') }}"><i class="fa-solid fa-backward"></i> Regresar</a>
            </div>
        </div>
    </div>
    <br>

    @if (session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif

    @auth

    <form action="{{ route('estudiante.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" name="nombre_estudiante" class="form-control" autocomplete="off" placeholder="Escribe el nombre del estudiante" />
                    <label class="form-label" for="nombre_estudiante">Nombre del estudiante</label>
                    @error('nombre_estudiante')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" name="carnet_estudiante" class="form-control" placeholder="Escribe el carnet del estudiante" autocomplete="off" />
                    <label class="form-label" for="carnet_estudiante">Carnet</label>
                    @error('carnet_estudiante')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <input type="email" name="correo_estudiante" class="form-control" placeholder="Escribe el correo electronico para el estudiante" autocomplete="off" />
            <label class="form-label" for="correo_estudiante">Correo</label>
            @error('correo_estudiante')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <select name="carrera_estudiante" class="form-control form-select">
                <option selected disabled>Selecciona una carrera para el estudiante</option>
                @foreach ($lista_carreras as $carrera)
                <option value="{{ $carrera }}">{{ $carrera }}</option>
                @endforeach
            </select>
            <label class="form-label" for="carrera_estudiante">Carrera del estudiante</label>
            @error('carrera_estudiante')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <select name="anio_estudiante" class="form-control form-select">
                <option selected disabled>Selecciona un año cursante para el estudiante</option>
                @foreach ($anios_carreras as $anio)
                <option value="{{ $anio }}">{{ $anio }}</option>
                @endforeach
            </select>
            <label class="form-label" for="anio_estudiante">Año que cursa el estudiante</label>
            @error('anio_estudiante')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-lg btn-primary btn-block w-100"><i class="fa-solid fa-floppy-disk"></i> Guardar estudiante</button>
    </form>
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
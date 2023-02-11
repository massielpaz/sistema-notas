@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2><i class="fa-solid fa-star"></i> Agregar nueva nota</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('notas.index') }}"><i class="fa-solid fa-backward"></i> Regresar</a>
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

    <form action="{{ route('notas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-outline mb-4">
            <input type="number" name="nota" class="form-control" placeholder="Escribe la nota que vas a registrar" autocomplete="off" />
            <label class="form-label" for="nota">Nota</label>
            @error('nota')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <select name="estudiante" class="form-control form-select">
                <option selected disabled>Selecciona un estudiante para la nota</option>
                @foreach ($estudiantes as $estudiante)
                <option value="{{ $estudiante->id_estudiante }}">{{ $estudiante->nombre_estudiante }}</option>
                @endforeach
            </select>
            <label class="form-label" for="estudiante">Estudiante para la nota</label>
            @error('estudiante')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <select name="materia" class="form-control form-select">
                <option selected disabled>Selecciona una materia para la nota</option>
                @foreach ($materias as $materia)
                <option value="{{ $materia->id_materias }}">{{ $materia->nombre_materia }}</option>
                @endforeach
            </select>
            <label class="form-label" for="materia">Materia para la nota</label>
            @error('materia')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <select name="docente" class="form-control form-select">
                <option selected disabled>Selecciona un docente para la nota</option>
                @foreach ($docentes as $docente)
                <option value="{{ $docente->id_docente }}">{{ $docente->nombre_docente }}</option>
                @endforeach
            </select>
            <label class="form-label" for="docente">Docente para la nota</label>
            @error('docente')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-lg btn-primary btn-block w-100"><i class="fa-solid fa-floppy-disk"></i> Crear nota</button>
    </form>
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
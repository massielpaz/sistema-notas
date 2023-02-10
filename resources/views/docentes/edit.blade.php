@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar docente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('docentes.index') }}"><i class="fa-solid fa-backward"></i> Regresar</a>
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
    <form action="{{ route('docentes.update', $docentes->id_docente) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" name="nombre_docente" class="form-control" autocomplete="off" placeholder="Escribe el nombre del docente" value="{{ $docentes->nombre_docente }}" />
                    <label class="form-label" for="nombre_docente">Nombre del docente</label>
                    @error('nombre_docente')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" name="titulo_docente" class="form-control" placeholder="Escribe el titulo del docente" autocomplete="off" value="{{ $docentes->titulo_docente }}" />
                    <label class="form-label" for="titulo_docente">Titulo del docente</label>
                    @error('titulo_docente')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <input type="email" name="correo_docente" class="form-control" placeholder="Escribe el correo electronico del docente" autocomplete="off" value="{{ $docentes->correo_docente }}" />
            <label class="form-label" for="correo_docente">Correo</label>
            @error('correo_docente')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <input type="text" name="telefono_docente" class="form-control" placeholder="Escribe el telefono del docente" autocomplete="off" value="{{ $docentes->telefono_docente }}" />
            <label class="form-label" for="telefono_docente">Telefono</label>
            @error('telefono_docente')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary ml-3"><i class="fa-solid fa-floppy-disk"></i> Actualizar docente</button>
    </form>
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
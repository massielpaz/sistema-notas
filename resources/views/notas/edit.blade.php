@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar nota de {{ $nota->estudiante->nombre_estudiante }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('notas.index') }}"><i class="fa-solid fa-backward"></i> Regresar</a>
            </div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif

    @auth
    <form action="{{ route('notas.update', $nota->id_nota) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-outline mb-4">
            <input type="number" name="nota" class="form-control" placeholder="Escribe la nota que vas a registrar" value="{{ $nota->nota }}" autocomplete="off" />
            <label class="form-label" for="nota">Nota</label>
            @error('nota')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary ml-3"><i class="fa-solid fa-floppy-disk"></i> Actualizar nota</button>
    </form>
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
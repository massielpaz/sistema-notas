@extends('app-master')

@section('content')
    <div class="bg-light p-5 rounded">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar materia</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('materias.index') }}"> Regresar</a>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        @auth
            <form action="{{ route('materias.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre de la materia:</strong>
                            <input type="text" name="nombre_materia" class="form-control" placeholder="Nombre de la materia">
                            @error('nombre_materia')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Guardar</button>
                </div>
            </form>
        @endauth

        @guest
            <h1>No autenticado</h1>
            <p class="lead">Es necesario que inicies sesion para poder visualizar esta pagina</p>
        @endguest
    </div>
@endsection

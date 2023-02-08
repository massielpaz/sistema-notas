@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('estudiante.create') }}"><i class="fa-solid fa-plus"></i> Agregar un nuevo estudiante</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p><i class="fa-solid fa-circle-info"></i> {{ $message }}</p>
    </div>
    @endif
    @auth
    <h1><i class="fa-solid fa-table-columns"></i> Control de estudiantes del sistema</h1>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Estudiante</th>
                <th>Carnet</th>
                <th>Nombre del estudiante</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiante as $item)
            <tr>
                <td>{{ $item->id_estudiante }}</td>
                <td>{{ $item->carnet_estudiante }}</td>
                <td>{{ $item->nombre_estudiante }}</td>
                <td>{{ $item->correo_estudiante }}</td>
                <td>{{ $item->carrera_estudiante }}</td>
                <td>{{ $item->anio_estudiante }}</td>
                <td>
                    <form action="{{ route('estudiante.destroy', $item->id_estudiante) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('estudiante.edit', $item->id_estudiante) }}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $estudiante->links() !!}
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    @auth
    <h1><i class="fa-solid fa-chalkboard-user"></i> Control de docentes</h1>
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('docentes.create') }}"><i class="fa-solid fa-plus"></i> Agregar nuevo docente</a>
    </div>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID docente</th>
                <th>Nombre del docente</th>
                <th>Titulo del docente</th>
                <th>Correo docente</th>
                <th>Telefono docente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
            <tr>
                <td>{{ $docente->id_docente }}</td>
                <td>{{ $docente->nombre_docente }}</td>
                <td>{{ $docente->titulo_docente }}</td>
                <td>{{ $docente->correo_docente }}</td>
                <td>{{ $docente->telefono_docente }}</td>
                <td>
                    <form action="{{ route('docentes.destroy', $docente->id_docente) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('docentes.edit', $docente->id_docente) }}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $docentes->links() !!}
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
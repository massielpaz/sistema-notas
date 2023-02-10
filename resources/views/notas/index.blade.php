@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('materias.create') }}"> Agregar nueva nota</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    @auth
    <h1>Control de notas del sistema</h1>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Nota</th>
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Docente</th>
                <th>Nota</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
            
            <tr>
                <td>{{ $nota->id_nota }}</td>
                <td>{{ $nota->estudiante->nombre_estudiante }}</td>
                <td>{{ $nota->materia->nombre_materia }}</td>
                <td>{{ $nota->docente->nombre_docente }}</td>
                <td>{{ $nota->nota }}</td>
                <td>
                    <form action="{{ route('materias.destroy', $nota->id_nota) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('materias.edit', $nota->id_nota) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $notas->links() !!}
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
@extends('app-master')

@section('content')
<div class="bg-light p-5 rounded">

    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('materias.create') }}"> Agregar nueva materia</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    @auth
    <h1>Control de materias del sistema</h1>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Materia</th>
                <th>Nombre materia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
            <tr>
                <td>{{ $materia->id_materias }}</td>
                <td>{{ $materia->nombre_materia }}</td>
                <td>
                    <form action="{{ route('materias.destroy', $materia->id_materias) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('materias.edit', $materia->id_materias) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $materias->links() !!}
    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection
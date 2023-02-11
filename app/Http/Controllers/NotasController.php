<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use App\Models\Estudiante;
use App\Models\Materias;
use App\Models\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        $notas = Notas::orderBy('id_nota', 'desc')->paginate(5);
        return view('notas.index', compact('notas'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $materias = Materias::all();
        $docentes = Docentes::all();

        return view('notas.create')
            ->with(compact('estudiantes', 'materias', 'docentes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nota' => 'required',
            'estudiante' => 'required',
            'materia' => 'required',
            'docente' => 'required'
        ]);

        $nota = $request->nota;
        $estudiante = $request->estudiante;
        $materia = $request->materia;
        $docente = $request->docente;

        Notas::create([
            'nota' => $nota,
            'id_estudiante' => $estudiante,
            'id_materia' => $materia,
            'id_docente' => $docente
        ]);

        return redirect()->route('notas.index')->with('success', 'El estudiante fue agregado correctamente');
    }

    public function edit($id)
    {
        $nota = Notas::where('id_nota', $id)->first();

        return view('notas.edit')
            ->with(compact('nota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nota' => 'required'
        ]);

        $nota = $request->nota;

        Notas::where('id_nota', $id)->update([
            'nota' => $nota
        ]);

        return redirect()->route('notas.index')
            ->with('success', 'La nota fue actualizada correctamente');
    }

    public function destroy($id)
    {
        Notas::where('id_nota', $id)->delete();
        return redirect()->route('notas.index')->with('success', 'La nota fue borrada correctamente');
    }
}

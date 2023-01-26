<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;

class MateriasController extends Controller
{
    //
    public function index()
    {
        $materias = Materias::orderBy('id_materias', 'desc')->paginate(5);
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_materia' => 'required'
        ]);

        Materias::create($request->post());

        return redirect()->route('materias.index')->with('success', 'La materia fue creada correctamente.');
    }

    public function show(Materias $materias)
    {
        return view('materias.show', compact('materias'));
    }

    public function edit($id)
    {
        $materias = Materias::where('id_materias', $id)->first();
        return view('materias.edit', compact('materias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_materia' => 'required'
        ]);

        $nombre_materia = $request->nombre_materia;

        Materias::where('id_materias', $id)->update([
            'nombre_materia' => $nombre_materia
        ]);

        return redirect()->route('materias.index')->with('success', 'La materia fue actualizada correctamente');
    }

    public function destroy($id)
    {
        Materias::where('id_materias', $id)->delete();
        return redirect()->route('materias.index')->with('success', 'La materia fue borrada correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;

class DocentesController extends Controller
{
    public function index()
    {
        $docentes = Docentes::orderBy('id_docente', 'desc')->paginate(5);
        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_docente' => 'required',
            'titulo_docente' => 'required',
            'correo_docente' => 'required',
            'telefono_docente' => 'required'
        ]);

        Docentes::create($request->post());

        return redirect()->route('docentes.index')->with('success', 'El docente fue agregado correctamente.');
    }

    public function show(Docentes $docentes)
    {
        return view('docentes.show', compact('docentes'));
    }

    public function edit($id)
    {
        $docentes = Docentes::where('id_docente', $id)->first();
        return view('docentes.edit', compact('docentes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_docente' => 'required',
            'titulo_docente' => 'required',
            'correo_docente' => 'required',
            'telefono_docente' => 'required'
        ]);

        $nombre_docente = $request->nombre_docente;
        $titulo_docente = $request->titulo_docente;
        $correo_docente = $request->correo_docente;
        $telefono_docente = $request->telefono_docente;

        Docentes::where('id_docente', $id)->update([
            'nombre_docente' => $nombre_docente,
            'titulo_docente' => $titulo_docente,
            'correo_docente' => $correo_docente,
            'telefono_docente' => $telefono_docente
        ]);

        return redirect()->route('docentes.index')->with('success', 'El docente fue actualizado correctamente');
    }

    public function destroy($id)
    {
        Docentes::where('id_docente', $id)->delete();
        return redirect()->route('docentes.index')->with('success', 'El docente fue borrado correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiante = Estudiante::orderBy('id_estudiante', 'desc')->paginate(5);
        return view('estudiante.index', compact('estudiante'));
    }

    public function create()
    {
        return view('estudiante.create')
            ->with('lista_carreras', [
                "Ing. En sistemas",
                "Enfermeria",
                "Administración de empresas",
                "Farmacia",
                "Contabilidad",
                "Psicologia",
                "Ingles",
                "Educación fisica"
            ])
            ->with('anios_carreras', [
                "1",
                "2",
                "3",
                "4",
                "5"
            ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'carnet_estudiante' => 'required',
            'nombre_estudiante' => 'required',
            'correo_estudiante' => 'required',
            'carrera_estudiante' => 'required',
            'anio_estudiante' => 'required'
        ]);

        Estudiante::create($request->post());

        return redirect()->route('estudiante.index')->with('success', 'El estudiante fue agregado correctamente');
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiante.show', compact('estudiante'));
    }

    public function edit($id)
    {
        $estudiante = Estudiante::where('id_estudiante', $id)->first();
        return view('estudiante.edit', compact('estudiante'))
            ->with('lista_carreras', [
                "Ing. En sistemas",
                "Enfermeria",
                "Administración de empresas",
                "Farmacia",
                "Contabilidad",
                "Psicologia",
                "Ingles",
                "Educación fisica"
            ])
            ->with('anios_carreras', [
                "1",
                "2",
                "3",
                "4",
                "5"
            ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'carnet_estudiante' => 'required',
            'nombre_estudiante' => 'required',
            'correo_estudiante' => 'required',
            'carrera_estudiante' => 'required',
            'anio_estudiante' => 'required'
        ]);

        $carnet_estudiante = $request->carnet_estudiante;
        $nombre_estudiante = $request->nombre_estudiante;
        $correo_estudiante = $request->correo_estudiante;
        $carrera_estudiante = $request->carrera_estudiante;
        $anio_estudiante = $request->anio_estudiante;

        Estudiante::where('id_estudiante', $id)->update([
            'carnet_estudiante' => $carnet_estudiante,
            'nombre_estudiante' => $nombre_estudiante,
            'correo_estudiante' => $correo_estudiante,
            'carrera_estudiante' => $carrera_estudiante,
            'anio_estudiante' => $anio_estudiante
        ]);

        return redirect()->route('estudiante.index')
            ->with('success', 'El estudiante fue actualizado correctamente');
    }

    public function destroy($id)
    {
        Estudiante::where('id_estudiante', $id)->delete();
        return redirect()->route('estudiante.index')->with('success', 'El estudiante fue borrado correctamente');
    }
}

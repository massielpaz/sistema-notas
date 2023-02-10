<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index')
            ->with("paginas", [
                [
                    "nombre" => "Estudiantes",
                    "icono" => "fa-graduation-cap",
                    "ruta" => "estudiante.index"
                ],
                [
                    "nombre" => "Materias",
                    "icono" => "fa-book",
                    "ruta" => "materias.index"
                ],
                [
                    "nombre" => "Docentes",
                    "icono" => "fa-chalkboard-user",
                    "ruta" => "docentes.index"
                ]
            ]);
    }
}

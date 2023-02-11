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
                    "ruta" => "estudiante.index",
                    "color" => "#C7F2A4"
                ],
                [
                    "nombre" => "Materias",
                    "icono" => "fa-book",
                    "ruta" => "materias.index",
                    "color" => "#31C6D4"
                ],
                [
                    "nombre" => "Docentes",
                    "icono" => "fa-chalkboard-user",
                    "ruta" => "docentes.index",
                    "color" => "#DEBACE"
                ],
                [
                    "nombre" => "Notas",
                    "icono" => "fa-star",
                    "ruta" => "notas.index",
                    "color" => "#FFD1D1"
                ]
            ]);
    }
}

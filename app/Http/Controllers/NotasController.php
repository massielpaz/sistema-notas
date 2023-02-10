<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        $notas = Notas::orderBy('id_nota', 'desc')->paginate(5);
        return view('notas.index', compact('notas'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Program; // Importamos el modelo de Programas
use App\Models\Servicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtenemos los banners ordenados por ID descendente
        $banners = Banner::orderBy('id', 'desc')->get();

        // Obtenemos todos los programas (Educación, Salud, etc.)
        $programs = Program::all();

        $servicios = Servicio::orderBy('id', 'desc')->get();

        // Pasamos AMBAS variables a la vista usando compact
        return view('welcome', compact('banners', 'programs', 'servicios'));
    }
}

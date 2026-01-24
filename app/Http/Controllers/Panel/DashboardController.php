<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aquí podrías consultar estadísticas más adelante
        return view('panel.dashboard');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtenemos los banners para mostrarlos en la web
        $banners = Banner::orderBy('id', 'desc')->get();

        // Retornamos la vista 'welcome' (o la que uses para tu inicio) pasando los datos
        return view('welcome', compact('banners'));
    }
}

<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        // Tomamos el primer registro (id 1)
        $about = About::first();
        return view('panel.abouts.index', compact('about'));
    }

    public function update(Request $request)
    {
        // Buscamos el registro con ID 1, si no existe lo crea (instancia en memoria)
        $about = About::findOrNew(1);

        $about->subtitle = $request->subtitle;
        $about->title1 = $request->title1;
        $about->numero = $request->numero; // El nuevo campo que agregaste
        $about->description = $request->description;
        $about->mission = $request->mission;
        $about->vision = $request->vision;

        if ($request->hasFile('image')) {
            // Eliminar imagen vieja si existe
            if ($about->image) {
                Storage::delete('public/' . $about->image);
            }
            // Guardar la nueva
            $path = $request->file('image')->store('about', 'public');
            $about->image = $path;
        }

        $about->save();

        return response()->json([
            'success' => true,
            'message' => 'Información de "Nosotros" actualizada con éxito.'
        ]);
    }
}

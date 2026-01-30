<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $servicios = Servicio::orderBy('id', 'desc')->get();
            return response()->json(['data' => $servicios]);
        }
        return view('panel.servicios.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'      => 'required|string|max:255',
            'descripcion' => 'required',
            'imagen'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $servicio = Servicio::find($request->id);
        $data = $request->only(['titulo', 'descripcion']);

        if ($request->hasFile('imagen')) {
            if ($servicio && $servicio->imagen) {
                Storage::disk('public')->delete($servicio->imagen);
            }
            $data['imagen'] = $request->file('imagen')->store('servicios', 'public');
        }

        Servicio::updateOrCreate(['id' => $request->id], $data);

        return response()->json([
            'success' => true,
            'message' => $request->id ? 'Servicio actualizado' : 'Servicio creado con éxito'
        ]);
    }

    public function edit($id)
    {
        return response()->json(Servicio::findOrFail($id));
    }

    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);
        if ($servicio->imagen) {
            Storage::disk('public')->delete($servicio->imagen);
        }
        $servicio->delete();

        return response()->json(['success' => true, 'message' => 'Servicio eliminado']);
    }
}
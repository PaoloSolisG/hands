<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $programs = Program::all();
            return response()->json(['data' => $programs]);
        }
        return view('panel.programs.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon'  => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        // Si hay ID, editamos; si no, creamos uno nuevo
        $program = $request->id ? Program::find($request->id) : new Program;

        $program->title = $request->title;

        if ($request->hasFile('icon')) {
            // Eliminar anterior si existe
            if ($program->icon) {
                Storage::disk('public')->delete($program->icon);
            }
            // Guardar nuevo: esto guarda "icons/nombre.png" (ruta limpia)
            $path = $request->file('icon')->store('icons', 'public');
            $program->icon = $path;
        }

        $program->save();

        return response()->json([
            'success' => true,
            'message' => 'Programa guardado correctamente'
        ]);
    }

    public function edit(string $id)
    {
        $program = Program::findOrFail($id);
        return response()->json($program); // Retornamos JSON para el modal
    }

    public function destroy(string $id)
    {
        $program = Program::findOrFail($id);

        if ($program->icon) {
            Storage::disk('public')->delete($program->icon);
        }

        $program->delete();

        return response()->json([
            'success' => true,
            'message' => 'Eliminado correctamente'
        ]);
    }
}

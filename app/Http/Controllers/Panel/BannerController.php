<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $banners = Banner::orderBy('id', 'desc')->get();
            return response()->json(['data' => $banners]);
        }
        return view('panel.banners.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'texto'  => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $banner = Banner::find($request->id);
        $data = $request->only(['titulo', 'texto', 'descripcion']);

        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior si existe
            if ($banner && $banner->imagen) {
                Storage::disk('public')->delete($banner->imagen);
            }
            // Guardar nueva imagen
            $data['imagen'] = $request->file('imagen')->store('banners', 'public');
        }

        Banner::updateOrCreate(['id' => $request->id], $data);

        return response()->json([
            'success' => true,
            'message' => $request->id ? 'Banner actualizado' : 'Banner creado con éxito'
        ]);
    }

    public function edit($id)
    {
        return response()->json(Banner::findOrFail($id));
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        if ($banner->imagen) {
            Storage::disk('public')->delete($banner->imagen);
        }
        $banner->delete();

        return response()->json(['success' => true, 'message' => 'Banner eliminado físicamente']);
    }
}

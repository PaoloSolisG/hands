<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'titulo',
        'texto',
        'descripcion',
        'imagen',
        'activo'
    ];



    /**
     * Lógica para guardar o actualizar un Banner
     */
    public static function storeOrUpdate($data)
    {
        // 1. Manejo de la imagen
        if (isset($data['imagen']) && $data['imagen']->isValid()) {
            // Guarda en storage/app/public/banners y retorna la ruta
            $rutaImagen = $data['imagen']->store('banners', 'public');
            $data['imagen'] = $rutaImagen;
        }

        // 2. Insertar en la base de datos (usamos updateOrCreate por si luego editamos)
        return self::updateOrCreate(
            ['id' => $data['id'] ?? null],
            [
                'titulo'      => $data['titulo'],
                'texto'       => $data['texto'],
                'descripcion' => $data['descripcion'],
                'imagen'      => $data['imagen'] ?? null,
                'activo'      => true,
            ]
        );
    }
}

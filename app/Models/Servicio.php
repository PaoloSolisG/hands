<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
    ];

    // Mantengo tu lógica de storeOrUpdate si prefieres llamarla desde el controlador
    public static function storeOrUpdate($data)
    {
        if (isset($data['imagen']) && $data['imagen']->isValid()) {
            $data['imagen'] = $data['imagen']->store('servicios', 'public');
        }

        return self::updateOrCreate(
            ['id' => $data['id'] ?? null],
            [
                'titulo'      => $data['titulo'],
                'descripcion' => $data['descripcion'],
                'imagen'      => $data['imagen'] ?? null,
            ]
        );
    }
}
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel\BannerController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\ServicioController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\AboutController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'panel'], function () {

    // Ruta: tu-dominio.com/panel
    Route::get('/', [DashboardController::class, 'index'])->name('panel.dashboard');


    Route::controller(BannerController::class)->group(function () {
        Route::get('/banners', 'index')->name('banners.index');
        Route::post('/banners/store', 'store')->name('banners.store');
        Route::get('/banners/{id}/edit', 'edit')->name('banners.edit');
        Route::delete('/banners/{id}/destroy', 'destroy')->name('banners.destroy');
    });

    // 2. NUEVAS Rutas de Programas (CRUD de Educación, Salud, etc.)
    Route::controller(ProgramController::class)->group(function () {
        Route::get('/programs', 'index')->name('programs.index');           // Lista
        Route::post('/programs/store', 'store')->name('programs.store');    // Guardar
        Route::get('/programs/{id}/edit', 'edit')->name('programs.edit');   // Form editar
        Route::put('/programs/{id}/update', 'update')->name('programs.update'); // Actualizar (¡No olvides esta!)
        Route::delete('/programs/{id}/destroy', 'destroy')->name('programs.destroy'); // Eliminar
    });


    Route::controller(ServicioController::class)->group(function () {
        Route::get('/servicios', 'index')->name('servicios.index');
        Route::post('/servicios/store', 'store')->name('servicios.store');
        Route::get('/servicios/{id}/edit', 'edit')->name('servicios.edit');
        Route::delete('/servicios/{id}/destroy', 'destroy')->name('servicios.destroy');
    });
    // 4. About (Nosotros) - ¡AGREGADO AQUÍ!
    Route::controller(AboutController::class)->group(function () {
        // Muestra el formulario único
        Route::get('/about', 'index')->name('about.index');
        // Procesa la actualización (usamos POST porque enviamos archivos/imágenes)
        Route::post('/about/update', 'update')->name('about.update');
    });
});

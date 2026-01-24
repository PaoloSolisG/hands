<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel\BannerController;
use App\Http\Controllers\Panel\DashboardController;
use Illuminate\Support\Facades\Route;



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
});

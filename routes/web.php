<?php

use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\PreguntaFrecuenteController;
use App\Http\Controllers\TipoSitiosController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuiaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocalizationController;


Route::get('/lang/{locale}', [LocalizationController::class, 'set_lang'])->name('cambiar-idioma');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//      **********************     Page Routes     **********************

// Home

Route::get('/', [PageController::class, 'ShowProvinciasIndex'])->name('indexpage');

// Blogs

// Site details


// Events


// Single events

// FAQs


//      **************     Admin Routes     **********************

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    });
    
    Route::put('/guides/{id}/update-translation', [GuiaController::class, 'specificUpdate'])->name('guides.update_translation');
    Route::resource('/guides', GuiaController::class)->middleware('verify.lugares');;

    Route::get('/buscarguia', [GuiaController::class, 'search'])->name('search_guia');

    
});







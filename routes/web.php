<?php
use Illuminate\Support\Facades\Route;

use Spatie\Permission\Models\Role;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\LocalizationController;


Route::get('/lang/{locale}', [LocalizationController::class, 'set_lang'])->name('cambiar-idioma');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//      **********************     Page Routes     **********************

// Home

Route::get('/', function () {
    return view('home.index'); // Asegúrate de que el nombre 'index' coincida con tu archivo de vista
})->name('indexpage');



//      **************     Admin Routes     **********************

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    });

    Route::resource('/users', UserController::class);

    Route::get('/buscarusuario', [UserController::class, 'search'])->name('search_user');
});








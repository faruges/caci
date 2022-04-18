<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RfcController;

Route::view('/', 'index');
Route::view('/inicio', 'index');
Route::view('/centros_caci', 'centros_caci.centros_Luz_María');
Route::view('requisitos', 'secciones_menu.requisitos');
Route::view('/informacion_destacada', 'secciones_menu.informacion_destacada');
Route::view('/preguntas_frecuentes', 'secciones_menu.preguntas_frecuentes');

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', [App\Http\Controllers\PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::get('/datos-tutor', [App\Http\Controllers\DatosTutorController::class, 'datosTutor'])
    ->middleware('auth:sanctum')
    ->name('datos-tutor');

Route::resource('datosTutor', App\Http\Controllers\DatosTutorController::class)
    ->middleware('auth:sanctum');

Route::get('/datos-tutor/create-P2', [App\Http\Controllers\DatosTutorController::class, 'createP2'])
    ->middleware('auth:sanctum')
    ->name('datos-tutor.create-P2');

//Route::resource('rfc', App\Http\Controllers\RfcController::class);

//Route::controller(App\Http\Controllers\RfcController::class)->group(function (){
//    Route::post('', 'store')->name('rfc');
//});


Route::post('register', [App\Http\Controllers\RfcController::class, 'store'])->name('rfc.store');

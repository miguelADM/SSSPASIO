<?php

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\enfermedadesController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\UserController;
use App\Models\ClasificacionEjercicio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','components.home');

//ruta grupos
Route::resource('grupos', GruposController::class);


//ruta enfermedades
Route::resource('enfermedades', enfermedadesController::class);

//ruta Usuarios
Route::resource('usuarios', UserController::class);

//ruta clasificacion Ejercicios
Route::resource('clasificacion_ejercicios', ClasificacionEjercicio::class);

//ruta Ejercicios
Route::get('/ejercicios/{id}', [EjercicioController::class, 'index'])->name('ejercicios.index');
Route::get('/agregar_ejercicios/{id}', [EjercicioController::class, 'create'])->name('ejercicios.create');
Route::post('/store_ejercicios/{id}', [EjercicioController::class, 'store'])->name('ejercicios.store');
Route::get('/edit_ejercicios/{slug}', [EjercicioController::class, 'edit'])->name('ejercicios.edit');
Route::put('/update_ejercicios/{slug}', [EjercicioController::class, 'update'])->name('ejercicios.update');
Route::get('/show_ejercicios/{slug}',[EjercicioController::class, 'show'])->name('ejercicios.show');
Route::delete('/destroy_ejercicios/{slug}',[EjercicioController::class, 'destroy'])->name('ejercicios.destroy');
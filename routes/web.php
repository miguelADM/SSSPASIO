<?php

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\enfermedadesController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClasificacionEjercicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* Route::get('admin', function () {
    return view('admin/admin');
})->middleware('auth', 'email.check:admin@example.com')->name('admin'); */

Route::prefix('admin')/* ->middleware('auth', 'email.check:admin@example.com') */->group(function () {
    Route::get('/', function () {
        return view('admin/admin');
    })->name('admin');


Route::view('home','components.home');

//ruta grupos
Route::resource('working-groups', GruposController::class);


//ruta enfermedades
Route::resource('diseases', enfermedadesController::class);

//ruta Usuarios
Route::resource('users', UserController::class);

//ruta clasificacion Ejercicios
Route::resource('classification', ClasificacionEjercicioController::class);

//ruta Ejercicios
Route::resource('exercises', EjercicioController::class);

    Route::get('/routines', function () {
        return view('admin/routines');
    });

    Route::get('/nutritional-recommendation', function () {
        return view('admin/nutritional-recommendation');
    });

    Route::get('/tips', function () {
        return view('admin/tips');
    });

    Route::get('/user-progress', function () {
        return view('admin/user-progress');
    });
});

Route::get('/home', function () {
    return view('home/home');
})->name('home')/* ->middleware('auth') */;

Route::get('/routines', function () {
    return view('home/routines');
})->name('routines');

Route::get('/rt-cardio', function () {
    return view('home/rt-cardio');
})->name('cardio');

Route::get('/something-more', function () {
    return view('home/something-more');
})->name('more');

Route::get('/diet', function () {
    return view('home/diet');
})->name('diet');


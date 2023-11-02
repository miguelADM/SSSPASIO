<?php

use App\Http\Controllers\ClasificacionEjercicioController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\enfermedadesController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\UserController;
use App\Models\ClasificacionEjercicio;
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

    Route::get('/users', function () {
        return view('admin/users');
    });

    //ruta Usuarios
    Route::resource('/users', UserController::class);

    //ruta para los grupos
    Route::resource('/working-groups', GruposController::class);

    //ruta para las enfermedades
    Route::resource('/diseases', enfermedadesController::class);

    //ruta para la clasificacion de ejercicios
    Route::resource('/classification', ClasificacionEjercicioController::class);


    Route::get('/exercises', function () {
        return view('admin/exercises');
    });

Route::view('home','components.home');


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


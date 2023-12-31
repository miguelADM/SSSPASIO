<?php

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\enfermedadesController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClasificacionEjercicioController;
use App\Http\Controllers\RecomendacionNutricionalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\TipsController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* Route::get('admin', function () {
    return view('admin/admin');
})->middleware('auth', 'email.check:admin@example.com')->name('admin'); */

Route::post('login',[AuthController::class,'login'])->name('loginMultiple');

Route::prefix('admin')->middleware('AuthAdmin')->group(function () {
    Route::get('/', function () {
        return view('admin/admin');
    })->name('admin');


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

    //ruta de nutricion
    Route::resource('/nutritional-recommendation', RecomendacionNutricionalController::class);

    //ruta Tips
    Route::resource('tips', TipsController::class);

    Route::get('/routines', function () {
        return view('admin/routines');
    });

    Route::get('/user-progress', function () {
        return view('admin/user-progress');
    });

    Route::get('/usuarioTemp', function () {
        return view('admin/usuarioTemp');
    });
});

Route::middleware('AuthUser')->group(function () {
    
    Route::get('/home', function () {
        return view('home/home');
    })->name('home');
    
    Route::get('/my-progress', function () {
        return view('home/my-progress');
    })->name('my-progress');
    
    Route::get('/top-winners', function () {
        return view('home/top-winners');
    })->name('top-winners');
    
    Route::get('/settings', function () {
        return view('home/settings');
    })->name('settings');
    
    Route::get('/routines', function () {
        return view('home/routines');
    })->name('routines');
    
    Route::get('/rt-cardio', function () {
        return view('home/rt-cardio');
    })->name('cardio');
    
    Route::get('/something-more', function () {
        return view('home/something-more');
    })->name('something-more');
    
    Route::get('/find-out', function () {
        return view('home/find-out');
    })->name('find-out');
    
    Route::get('/motivation', function () {
        return view('home/motivation');
    })->name('motivation');
    
    Route::get('/tips', function () {
        return view('home/tips');
    })->name('tips');
    
    Route::get('/diet', function () {
        return view('home/diet');
    })->name('diet');
    
});

Route::get('/my-progress', function () {
    return view('home/my-progress');
})->name('my-progress');

Route::get('/top-winners', function () {
    return view('home/top-winners');
})->name('top-winners');

Route::get('/settings', function () {
    return view('home/settings');
})->name('settings');

Route::get('/routines', function () {
    return view('home/routines');
})->name('routines');

Route::get('/rt-cardio', function () {
    return view('home/rt-cardio');
})->name('cardio');

Route::get('/something-more', function () {
    return view('home/something-more');
})->name('something-more');

Route::get('/find-out', function () {
    return view('home/find-out');
})->name('find-out');

Route::get('/motivation', function () {
    return view('home/motivation');
})->name('motivation');

Route::get('/tips', function () {
    return view('home/tips');
})->name('tips');

Route::get('/diet', function () {
    return view('home/diet');
})->name('diet');

Route::get('/privacy', function () {
    return view('home/privacy');
})->name('privacy');

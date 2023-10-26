<?php

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

    Route::get('/working-groups', function () {
        return view('admin/working-groups');
    });

    Route::get('/diseases', function () {
        return view('admin/diseases');
    });

    Route::get('/classification', function () {
        return view('admin/classification');
    });

    Route::get('/exercises', function () {
        return view('admin/exercises');
    });

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

Route::get('/top-winners', function () {
    return view('home/top-winners');
})->name('top-winners');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UsersController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('login',[AuthController::class,'login'])->name('loginMultiple');


Route::prefix('admin')->middleware('AuthAdmin')->group(function () {

    Route::get('/', function () {
        return view('admin/admin');
    })->name('admin');

    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::post('/users/store', [UsersController::class, 'store'])->name('user.store');
    Route::post('/users/update', [UsersController::class, 'update'])->name('user.update');
    Route::delete('/users/delete/{id}', [UsersController::class, 'destroy'])->name('user.destroy');

  

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

    Route::get('/usuarioTemp', function () {
        return view('admin/usuarioTemp');
    });
});

Route::middleware('AuthUser')->group(function () {
    Route::get('/home', function () {
        return view('home/home');
    })->name('home')/* ->middleware('auth') */;

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
});


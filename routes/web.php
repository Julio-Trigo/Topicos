<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/profile', [ProfileController::class, 'userProfile'])
    ->name('profile.user');

Route::get('/editar', [ProfileController::class, 'editar'])
    ->name('profile.editar');

Route::post('/editar', [ProfileController::class, 'update'])
    ->name('profile.update');

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'logout'])
    ->name('login.logout');
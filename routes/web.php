<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'all'])->name('home');

Route::resource('posts', PostController::class);

Route::prefix('auth')->group(function () {
    Route::get('/login', [App\Http\Controllers\UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login.post');
    Route::get('/register', [App\Http\Controllers\UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register.post');
    Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});

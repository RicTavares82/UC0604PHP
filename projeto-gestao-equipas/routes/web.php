<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');


//LOGIN
//Route::view('/login', 'login')->name('login');
Route::get('/login', [LoginController::class, 'show_login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');





Route::view('/dashboard', 'dashboard')
    ->middleware('auth')
    ->name('dashboard');




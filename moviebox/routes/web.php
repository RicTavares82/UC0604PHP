<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::resource('movies', MovieController::class);

Route::resource('genres', GenreController::class)
    ->except('show');

Route::resource('authors', AuthorController::class);




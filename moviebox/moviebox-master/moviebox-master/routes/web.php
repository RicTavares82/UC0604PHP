<?php

use Illuminate\Support\Facades\Route;



Route::view('/','home');

Route::view('/genres','generos.index');

Route::view('/movies','filmes.index');

Route::view('/movies/{movie}','filmes.show');

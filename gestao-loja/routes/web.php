<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtigoController;

// Rota para a nova página inicial estilizada
Route::get('/', function () {
    return view('home');
});

// Rotas do CRUD (Index, Create, Store, Edit, Update, Destroy)
Route::resource('artigos', ArtigoController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

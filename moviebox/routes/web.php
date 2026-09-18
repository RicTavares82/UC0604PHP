<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Página pública
|--------------------------------------------------------------------------
*/
Route::view('/', 'home')->name('home');

Route::resource('movies', MovieController::class);

Route::resource('genres', GenreController::class)
    ->except('show');

Route::resource('authors', AuthorController::class);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|
| O administrador pode realizar todas as operações.
|
*/

/*
|--------------------------------------------------------------------------
| EDITOR
|--------------------------------------------------------------------------
|
| O editor pode consultar, criar e editar.
| Não pode eliminar registos.
|
*/


/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
|
| O utilizador apenas pode consultar os dados.
|
*/

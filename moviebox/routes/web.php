<?php

use App\Http\Controllers\AuthController;
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


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'show'])->name('login.show');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('fast-login/{id}', [AuthController::class, 'fastLogin'])->name('login.fast');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


//Para apagar
Route::resource('movies', MovieController::class);

Route::resource('genres', GenreController::class)
    ->except('show');

Route::resource('authors', AuthorController::class);
//------------
/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|
| O administrador pode realizar todas as operações.
|
*/

Route::middleware(['auth','role:admin'])->group(function () {
    Route::name('admin.')->group(function () {
        Route::prefix('admin')->group(function () {

            Route::view('dashboard','dashboard')->name('dashboard');

            Route::resource('genres', GenreController::class)
                ->except('show');
            Route::resource('authors', AuthorController::class);
            Route::resource('movies', MovieController::class);
        });
    });
});

/*
|--------------------------------------------------------------------------
| EDITOR
|--------------------------------------------------------------------------
|
| O editor pode consultar, criar e editar.
| Não pode eliminar registos.
|
*/

Route::middleware(['auth','role:editor'])->group(function () {
    Route::name('editor.')->group(function () {
        Route::prefix('editor')->group(function () {
            Route::view('dashboard','dashboard')->name('dashboard');
            Route::resource('genres', GenreController::class)
                ->only('index', 'update','edit');
        });
    });
});


/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
|
| O utilizador apenas pode consultar os dados.
|
*/

Route::middleware(['auth','role:user'])->group(function () {
    Route::name('user.')->group(function () {
        Route::view('dashboard','dashboard')->name('dashboard');
        Route::prefix('user')->group(function () {
            Route::resource('genres', GenreController::class)
                ->only('index');
        });
    });
});

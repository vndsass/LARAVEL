<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\EditoraController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //rota para os utilizadores
    Route:: get('/users_index', [UserController::class, 'index' ])->name('user.index');
    Route:: get('/users_edit/{id}', [UserController::class, 'edit' ])->name('user.edit');
    Route:: put('/users_update/{id}', [UserController::class, 'update' ] )->name('user.update');
    Route:: get('/users_destroy/{id}',[UserController::class, 'destroy' ])->name('user.destroy');

    //rota para os socios
    Route:: resources([
        //prefixo para aceder as rotas
        'socio'=>SocioController::class
    ]);

    //rota para os socios de um utilizador
    Route:: get('/socios_user/{id}', [SocioController:: class, 'socio_user'])->name('socio.user');
    //Route:: get ('/socios_delete/{id}', [SocioController::class,'delete'])->name('socio.delete');!-->
    
    //rota para as editoras
    Route::resources([
        'editora'=>EditoraController::class
    ]);
    
    //rota para a paginacao de confirmacao de elimincao de socio
    Route:: get('/confirma_delete/{id}', [SocioController::class,'confirma_delete'])->name('socio.confirma_delete');
   
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


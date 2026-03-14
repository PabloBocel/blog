<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class)->name('home.index');

/*
Route::prefix('/posts')->name('posts.')->controller(PostController::class)->group(function () {
    //mostrar listado de registros
    Route::get('/', 'index')->name('index');
    //Ruta mostrar formulario creacion de registro
    Route::get('/create', 'create')->name('create');
    //Ruta guardar informacion del formulario
    Route::post('/', 'store')->name('store');
    //Ruta mostrar un formulario
    Route::get('/{post}', 'show')->name('show');
    //ruta para editar un registro
    Route::get('/{post}/edit', 'edit')->name('edit');
    //ruta para actualizar un registro
    Route::put('/{post}', 'update')->name('update');
    //ruta para eliminar un registro
    Route::delete('/{post}', 'destroy')->name('destroy');
});
*/
//Ruta mostrar CRUD de posts

//mostrar listado de registros
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::resource('posts', PostController::class);

//->except(['index', 'show']); ->only(['index', 'show']);
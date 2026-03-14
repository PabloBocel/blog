<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/contacto', function () {
    return "Hola desde la pagina de contacto usando get";
});

Route::post('/contacto', function () {
    return "Hola desde la pagina de contacto usando post";
});

//va viendo de arriab hacia abajo
Route::get('/materias/informacion', function () {
    return "Aqui podras encotnrar informacion del curso";
})->name('cursos.informacion'); //le asignamos un nombre a la ruta para poder usarlo en los enlaces

//Contenido que puede variar asignado a una variable
Route::get('/cursos/{id}', function ($id) {

    return "Hola desde la pagina del curso: $id";
})->name('cursos.show'); //solo acepta numeros, no letras ni caracteres especiales
// tambien funciona con ->where('id', '[0-9]+') o con where('id', '[0-9]+')
// o whereIN('id', [1, 2, 3])

//Ruta mostrar CRUD de posts
//mostrar listado de registros
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//Ruta mostrar formulario creacion de registro
//Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//Ruta guardar informacion del formulario
//Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//Ruta mostrar un formulario
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
//ruta para editar un registro
//Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.update');
//ruta para actualizar un registro
//Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//ruta para eliminar un registro
//Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('posts', PostController::class);
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'Post 1', 'content' => 'Contenido del post 1'],
            ['title' => 'Post 2', 'content' => 'Contenido del post 2'],
            ['title' => 'Post 3', 'content' => 'Contenido del post 3'],
        ];
        $cant = 10;
        return view('Posts.index', compact('posts', 'cant'));
    }

    public function create()
    {
        return view('Posts.create');
    }
    public function store()
    {
        return "Aqui se procesara un formulario para crear un nuevo post";
    }
    public function show($post)
    {
        //compact('post') -> ['post' => $post]
        return view('Posts.show', compact('post'));
    }
    public function edit($post)
    {
        return view('Posts.edit', compact('post'));
    }
    public function update($post)
    {
        return "Aqui se procesará el formulario para actualizar el post: $post";
    }
    public function destroy($post)
    {
        return "Aqui se procesará la eliminación del post: $post";
    }
}

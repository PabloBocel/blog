<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Hola desde la pagina de posts";
    }

    public function create()
    {
        return "Hola desde la pagina de create ";
    }
    public function store()
    {
        return "Aqui se procesara un formulario para crear un nuevo post";
    }
    public function show($id)
    {
        return "Hola desde la pagina del post: $id";
    }
    public function edit($id)
    {
        return "Aqui se mostrará el formulario para editar el post: $id";
    }
    public function update($id)
    {
        return "Aqui se procesará el formulario para actualizar el post: $id";
    }
    public function destroy($id)
    {
        return "Aqui se procesará la eliminación del post: $id";
    }
}

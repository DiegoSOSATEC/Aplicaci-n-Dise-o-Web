<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        // Aquí puedes incluir la lógica para buscar y editar el producto
        return view('edit');
    }
}

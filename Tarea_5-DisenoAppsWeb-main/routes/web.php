<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/products/create', [ProductoController::class, 'create'])->name('products.create');
Route::post('/productos', [ProductoController::class, 'store']);
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

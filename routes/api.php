<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('api')->middleware('api')->group(function () {
    Route::get('/products', [ProductController::class, 'index']); // ruta para obtener todos los productos
    Route::post('/products', [ProductController::class, 'store']); // ruta para crear un nuevo producto
    Route::get('/products/{id}', [ProductController::class, 'show']); // ruta para obtener un producto por ID
    Route::put('/products/{id}', [ProductController::class, 'update']); // ruta para actualizar un producto
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // ruta para eliminar un producto
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

Route::get('/students', [studentController::class,'index']);
    Route::get('/students/{id}', function () {
    return 'Obteniendo un estudiante';
    });
    Route::post('/students', function () {
    return 'Creando estudiantes';

    });
    Route::put('/students/{id}', function () {
    return 'Actualizando estudiante';
    });
    Route::delete('/students/{id}', function () {
    return 'Eliminando estudiante';
    });
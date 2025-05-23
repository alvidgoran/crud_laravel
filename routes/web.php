<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

use App\Http\Controllers\ProfesorController;

Route::resource('profesores', ProfesorController::class)->parameters([
    'profesores' => 'profesor'
]);




Route::resource('estudiantes', EstudianteController::class);


Route::get('/', function () {
    return view('welcome');
});

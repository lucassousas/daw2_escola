<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::Resources([
    "aluno" => AlunoController::class,
    "curso" => CursoController::class
]);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios_listar', [UsuarioController::class, 'listarUsuarios']); // requisição GET
Route::get('/index', [UsuarioController::class,'index']);
Route::post('/inserir', [UsuarioController::class,'inserir']);
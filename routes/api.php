<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

use App\Models\User;
use Illuminate\Http\Request;


//Route::get('/usuarios', [UsuarioController::class, 'listarUsuarios']); // requisição GET
//Route::post('/usuarios', [UsuarioController::class, 'criarUsuario']); // requisição POST

// Listar todos os usuários
Route::get('/usuarios', function () {
    return User::all();
});

// Criar um novo usuário
Route::post('/usuarios2', function (Request $request) {
    return User::create($request->all());
});

// Atualizar um usuário
Route::put('/usuarios/{id}', function (Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());
    return $user;
});

// Deletar um usuário
Route::delete('/usuarios/{id}', function ($id) {
    User::findOrFail($id)->delete();
    return response('Usuário deletado com sucesso', 200);
});


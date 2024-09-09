<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function listarUsuarios() {
        
        return Usuario::all();
    }
    public function index() {
        return view('adicionar');
    }
    
    
    public function buscar(Request $request) {
        
        $dado = $request->validate([
            'cpf' => 'required|numeric'
        ]);
    
        // Buscar o usuário pelo CPF
        $usuario = Usuario::where('cpf', $dado['cpf'])->first(); 
    
        // Verificar se o usuário foi encontrado
        if ($usuario != NULL) {
            echo "Usuário encontrado: CPF: $usuario->cpf  Nome - $usuario->nome";
        } else {
            echo "Não foi possível encontrar um usuário correspondente";
        }
    }
    
    public function inserir (request $request) {
        
        $validatedData = $request->validate([
            'cpf' => 'required|numeric', // CPF 
            'nome' => 'required|string|max:255', //nome
            'data_nascimento' => 'required|date|before:today', // Data no formato e anterior a hoje
        ]);
    
        // Inserir os dados no banco de dados
        $usuario = Usuario::create([
            'cpf' => $validatedData['cpf'],
            'nome' => $validatedData['nome'],
            'data_nascimento' => $validatedData['data_nascimento'],
        ]);
        
        if ($usuario)
            echo "Dados de $usuario->nome foram inseridos com sucesso";
        else
            echo 'Ocorreu algum erro';
        
        //echo 'oi';
    }   

    

};
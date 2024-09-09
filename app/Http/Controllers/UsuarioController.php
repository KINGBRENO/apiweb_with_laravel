<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function listarUsuarios() {
        
        return Usuario::all();
    }
    public function index(Request $request) {
        return view('adicionar');
    }


    public function inserir (request $request) {
        
        $validatedData = $request->validate([
            'cpf' => 'required|numeric', // CPF 
            'nome' => 'required|string|max:255', //nome
            'data_nascimento' => 'required|date|before:today', // Data no formato correto e antes de hoje
        ]);
    
        // Inserir os dados no banco de dados
        $store = Usuario::create([
            'cpf' => $validatedData['cpf'],
            'nome' => $validatedData['nome'],
            'data_nascimento' => $validatedData['data_nascimento'],
        ]);
        
        if($store)
            echo "Dados de $store->nome foram inseridos com sucesso";
        else
            echo 'Ocorreu algum erro';
        
        //echo 'oi';
    }   

    

};
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario; 
use Illuminate\Support\Facades\Redirect; 

class cadastroFuncionario extends Controller
{

    public function buscaCadastroFuncionario(){

        return View('cadastroFuncionario');

    }

    public function cadastrarFuncionario(Request $request){
        $dadosfuncionarios = $request->validate(
            [
                'emailfun'=> 'string|required',
                'nomefun'=> 'string|required',
                'senhafun'=> 'string|required',
                'whatsappfun'=> 'string|required',
                'cpffun'=> 'string|required'
            ]
            );
        
        Funcionario::create($dadosfuncionarios);
        return Redirect::route('cadastro-funcionario');
    }
}
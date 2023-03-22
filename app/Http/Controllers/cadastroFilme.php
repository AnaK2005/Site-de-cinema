<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastroFilmeModel;

class cadastroFilme extends Controller
{
    public function buscaCadastroFilme(Request $request){

        return View('cadastroFilme');
    }

    public function cadastrarFilme() {
        $dadosFilme = $request->validate([
            'filme' => 'string|required',
            'atores'=> 'string|required',
            'dataLancamento' => 'string|required',
            'sinopse' => 'string|required',
            'capa' => 'string|required'
        ]);

        cadastroFilmeModel::create($dadosFilme); 

        return Redirect::route('/home');

        

    }
}
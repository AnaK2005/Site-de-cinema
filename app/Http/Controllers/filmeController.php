<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use Illuminate\Support\Facades\Redirect; 


class filmeController extends Controller
{
    public function buscaCadastroFilme(){

        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request) {
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme'=> 'string|required',
            'dtlancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'file|required',
        ]);
        //  dd($dadosFilme); 

        $file = $dadosFilme['capafilme'];
        $path = $file -> store('capa', 'public'); 
        $dadosFilme['capafilme'] = $path; 

        Filme::create($dadosFilme); 

       // return Redirect::route('cadastro-filme');

        

    }
}
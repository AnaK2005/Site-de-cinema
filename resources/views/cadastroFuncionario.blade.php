@extends('padrao')

@section('content') 

<h1>Cadastrar um novo funcionário</h1>


<form method = "post" action="{{route('cadastro-funcionario')}}">

    @csrf
    <div class="mb-3 form-check">
        <label for="nomeInput" class="form-label fs-5 text-white opacity-75">Nome:</label>
        <input type="text" name="nomefun" class="form-control" id="nomeInput" >
    </div>

    <div class="mb-3 form-check">
        <label for="emailInput" class="form-label fs-5 text-white opacity-75">Email:</label>
        <input type="email" name="emailfun" class="form-control" id="emailInput">
    </div>

    <div class="mb-3 form-check">
        <label for="whatsappInput" class="form-label fs-5 text-white opacity-75">Whatsapp:</label>
        <input type="text" name="whatsappfun"class="form-control" id="whatsappInput" >
    </div>
    
    <div class="mb-3 form-check">
        <label for="cpfInput" class="form-label fs-5 text-white opacity-75">CPF:</label>
        <input type="text" name="cpffun" class="form-control" id="cpfInput">
    </div>

    <div class="mb-3 form-check">
        <label for="senhaInput" class="form-label fs-5 text-white opacity-75">Senha:</label>
        <input type="password" name="senhafun"class="form-control" id="senhaInput">
    </div>
    
    <br /> 
    <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-secondary btn-lg">Salvar</button>
    </div>         
</form>

@endsection
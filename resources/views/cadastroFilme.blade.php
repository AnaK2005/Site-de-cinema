@extends('padrao')

@section('content') 

<h1>Cadastrar um novo filme</h1>


  <form method = "post" action="{{route('cadastro-filme')}}" enctype = "multipart/form-data">

    @csrf 
    
    <div class="mb-3 form-check">
      <label for="filmeInput" class="form-label fs-5 text-white opacity-75">Filme:</label>
      <input type="text" name="nomefilme" class="form-control" id="filmeInput" >
    </div>
    <div class="mb-3 form-check">
      <label for="atoresInput" class="form-label fs-5 text-white opacity-75">Atores:</label>
      <input type="text" name="atoresfilme" class="form-control" id="atoresInput">
    </div>
    <div class="mb-3 form-check">
      <label for="dataLancamentoInput" class="form-label fs-5 text-white opacity-75">Data de Lançamento:</label>
      <input type="date" name="dtlancamentofilme" class="form-control" id="dataLancamentoInput" >
    </div>
    <div class="mb-3 form-check">
      <label for="sinopseInput" class="form-label fs-5 text-white opacity-75">Sinopse:</label>
      <textarea class="form-control" name="sinopsefilme" id="sinopseInput" rows="3"></textarea>
    </div>
    <div class="mb-3 form-check">
      <label for="capaInput" class="form-label fs-5 text-white opacity-75">Capa:</label>
      <input name="capafilme" class="form-control" type="file" id="capaInput">
    </div>
    </br> 
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-secondary btn-lg">Salvar</button>
    </div> 
  </form>

@endsection
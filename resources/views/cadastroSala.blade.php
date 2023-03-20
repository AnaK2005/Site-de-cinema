@extends('padrao')

@section('content')

<form class="container-fluid d-flex justify-content-center grid gap-7 mx-auto containercentrar formadm2">
    <fieldset>
        <center><legend class="legenda">Sessões</legend></center>
        <div class="mb-3">
            <label for="TextInput" class="form-label lbl">Número da sala: </label>
            <input desable type="text" id="TextInput" class="form-control">
            <label for="TextInput" class="form-label lbl">Quantidade de poltronas: </label>
            <input desable type="text" id="TextInput" class="form-control">
            <label for="TextInput" class="form-label lbl">Nome do filme: </label>
            <input desable type="text" id="TextInput" class="form-control">
            <label for="TextInput" class="form-label lbl">Horário: </label>
            <input desable type="text" id="TextInput" class="form-control">
        </div>
        <center><button type="submit" class="btn btn-primary botao">Cadastrar</button></center>
        <br />
        <center><button type="submit" class="btn btn-primary botao">Alterar</button></center>
        <br />
        <center><button type="submit" class="btn btn-primary botao">Buscar</button></center>
    </fieldset>
</form>        

@endsection
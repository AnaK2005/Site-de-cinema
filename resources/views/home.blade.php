@extends('padrao')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide; mx-auto" style="width: 50%; height: 50%;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('imagens/prop1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <a href = "pgfilme.html" class="text-decoration-none"><h5 class="lbl">Avatar: O Caminho da Água</h5></a>
              <p>Mergulhe neste mundo em uma experiência única e inimaginável.</p>
            </div>
          </div>
          @foreach($dadosfilme as $dadofilme)
          <div class="carousel-item">
            <img src='{{ asset("storage/$dadofilme->capafilme") }}' class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <a href = "pgfilme.html" class="text-decoration-none"><h5 class="lbl">Adão Negro</h5></a>
              <p>Venha sentir a emoção de um espetáculo de adrenalina.</p>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
</div>
@endsection
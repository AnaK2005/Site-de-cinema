@extends('padrao')

@section('content')

<br /> 
<br /> 

<div id="carouselExampleIndicators" class="carousel slide height: 100%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('imagens/propcinema.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagens/propcinema2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagens/propcinema3.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</br>
</br> 



<div class="d-flex justify-content-sm-between">
<img src="{{ asset('imagens/cardbradeso.jpg') }}" style="width: 20%; height: 20%;" class= "rounded">
<img src="{{ asset('imagens/cardelo.jpg') }}" style="width: 20%; height: 20%;" class= "rounded">
<img src="{{ asset('imagens/cardpicpay.jpg') }}" style="width: 20%; height: 20%;" class= "rounded">
<img src="{{ asset('imagens/cardvivo.jpg') }}" style="width: 20%; height: 20%;" class= "rounded">

</div>


<br /> 
<br /> 

<h1>Filmes em cartaz no CinePlay</h1>


<div class="container d-flex justify-content-center wrap">
        @foreach($dadosfilme as $dadofilme)
          @if(empty($dadofilme))

          @else
          <div class="container fluid w-25">
          <img src='{{ asset("storage/$dadofilme->capafilme") }}' class="d-block" style="width:100%; max-height:80%;  min-height:80%" alt="..."> 
          <br /> 
          <p class = "text-center ">{{$dadofilme->nomefilme}}</p> 
          <p class = "text-center fs-5">{{$dadofilme->dtlancamentofilme}}</p> 

          </div>

          @endif
          @endforeach
</div>


@endsection
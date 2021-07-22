@extends ('layouts.main')

@section('title', $serie->name_serie)

@section('content')
    <div class="col-md-10">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/series/{{ $serie->image }}" alt="" class="img">
                 {{-- Concatenando o nome do arquivo com o nome da imagem --}} 
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $serie->name_serie }}</h1>
                <p>{{ $serie->sinopse }}</p>
                <p>Avaliar</p>
            </div>
        </div>
    </div>
@endsection
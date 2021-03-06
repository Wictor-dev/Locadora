@extends ('layouts.main')

@section('title', $serie->name_serie)

@section('content')
        <div class="row row-show-img">
            <!-- <div class="col"> -->
                <div class="img-show">
                <img src="/img/series/{{ $serie->image }}" alt="">
                {{-- Concatenando o nome do arquivo com o nome da imagem --}} 
                </div>
            <!-- </div> -->
        </div>
        <div class="row text-center">
            <div class="col">
            <h1>{{ $serie->name_serie }}</h1>
                    <p>{{ $serie->sinopse }}</p> 
                    <p>
                    @foreach ($serie->categories as $category)
                        {{ $category->name_category }}
                    @endforeach
                    </p>
                    <a href="/series/edit/{{ $serie->id }}" class="btn btn-info edit-btn">Editar</a>
                    <form action="/series/{{ $serie->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
            </div>
        </div>
        <div class='row'>
            <div class="col">
                <a href="/episodes/create" class="btn btn-primary" role="button">Cadastrar Episódio</a>
            </div>
        </div>
        <div class='row'>
            @for ($i=1; $i<= $serie->seasons; $i ++)
            <div class="col">
                <p> Temporada {{ $i }}</p>
                @foreach ($serie->episodes as $episode)
                    @if ($episode->season == $i)
                        <p>{{$episode->name_episode}}</p>
                    @endif
                @endforeach 
            </div>
            @endfor  
        </div>
        

@endsection
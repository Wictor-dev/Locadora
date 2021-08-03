@extends ('layouts.main')

@section('title', 'Editar Série')

@section('content')
<div class="container">
    <div class="row">
        <h1>Editar: {{ $serie->name_serie }}</h1>
    </div>
    <form action="/series/update/{{ $serie->id }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" class="from-control-file" name="image" id="image">
            <img src="/img/series/{{ $serie->image }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name_serie" id="name_serie" placeholder="Digite o nome da série" value="{{ $serie->name_serie }}">
        </div>
        <!-- <div class="form-group">
            <label for="category">Categoria</label>
            <select name="category" id="" class="form-control"> 
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name_category }}</option>
            @endforeach
            </select>

            
        </div> -->
        <div class="form-group">
            <label for="sinopse">sinopse</label>
            <textarea class="form-control" name="sinopse" id="sinopse" cols="30" rows="10" placeholder="Digite a sinopse da série">{{ $serie->sinopse }}</textarea>
        </div>
        <div class="form-group">
            <label for="seasons">Temporadas</label>
            <input type="text" class="form-control" name="seasons" id="seasons" placeholder="Digite  o número de temporadas" value="{{ $serie->seasons }}">
        </div>
        <div class="form-group">
            <label for="dateLaunch">Data de lançamento</label>
            <input type="date" class="form-control" name="date_launch" id="date_launch" placeholder="Digite a data de lançamento da série" value="{{ $serie->date_launch }}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection
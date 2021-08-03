@extends('layouts.main')

@section('title','Criar Episódio')

@section('content')
<div class="container">
    <div class="row">
        <h1>Cadastrar Episódio</h1>
    </div>
    <form action="/episodes" method="POST" class="form">
    @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name_episode" id="name_episode" placeholder="Digite o nome do episódio">
        </div>
        <div class="form-group">
            <label for="description_episode">Descrição</label>
            <textarea class="form-control" name="description_episode" id="description_episode" cols="30" rows="10" placeholder="Digite a sinopse da série"></textarea>
        </div>
        <div class="form-group">
            <label for="numberEp">Número do episódio</label>
            <input type="number" class="form-control" name="number_of_episode" id="number_of_episode" placeholder="Digite o número do episódio">
        </div>
        <div class="form-group">
            <label for="season">Temporada</label>
            <input type="number" class="form-control" name="season" id="season" placeholder="Digite a temporada do episódio">
        </div>
        <div class="form-group">
            <label for="serie">Série</label>
            <select name="serie" id="" class="form-control"> 
            @foreach ($series as $serie)
                <option value="{{ $serie->id }}">{{ $serie->name_serie }}</option>
            @endforeach
            </select>    
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
</div>
@endsection
@extends('layouts.main')

@section('title','Criar Serie')

@section('content')
<div class="container">
    <div class="row">
        <h1>Cadastrar Série</h1>
    </div>
    <form action="/series" method="POST" class="form" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" class="from-control-file" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name_serie" id="name_serie" placeholder="Digite o nome da série">
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" class="form-control" name="category" id="categoy" placeholder="Digite a categoria da série">
        </div>
        <div class="form-group">
            <label for="sinopse">sinopse</label>
            <textarea class="form-control" name="sinopse" id="sinopse" cols="30" rows="10" placeholder="Digite a sinopse da série"></textarea>
        </div>
        <div class="form-group">
            <label for="dateLaunch">Data de lançamento</label>
            <input type="date" class="form-control" name="date_launch" id="date_launch" placeholder="Digite a data de lançamento da série">
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
    
</div>
@endsection
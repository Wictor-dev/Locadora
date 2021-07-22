@extends('layouts.main')

@section('title','Criar Categoria')

@section('content')
<div class="container">
    <div class="row">
        <h1>Cadastrar Categoria</h1>
    </div>
    <form action="/category" method="POST" class="form">
    @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name_category" id="name_category" placeholder="Digite o nome da Categoria">
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
    
</div>
@endsection
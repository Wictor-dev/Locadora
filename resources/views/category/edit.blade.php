@extends('layouts.main')

@section('title','Criar Categoria')

@section('content')
<div class="container">
    <div class="row">
        <h1>Cadastrar Categoria</h1>
    </div>
    <form action="/category/update/{{ $category->id }}" method="POST" class="form">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name_category" id="name_category" placeholder="Digite o nome da Categoria" value="{{ $category->name_category }}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
    
</div>
@endsection
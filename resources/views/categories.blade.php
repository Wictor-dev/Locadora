@extends('layouts.main')

@section('title','Categorias')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <h1>Categorias</h1>
        </div>
        <div class="col my-auto">
            <a href="/category/create" class="btn btn-primary" role="button">Criar categoria</a>
        </div>
    </div>
    @foreach ($categories as $category)
    <div class="row" style="justify-content:center;">
            <div class="col">    
                <a href="/category/{{ $category->id }}" style="color: white;"><h2 class="card-title">{{ $category->name_category }}</h>
            </div>
            <div class="col">
                <a href="/category/edit/{{ $category->id }}" class="btn btn-info edit-btn">Editar</a>
            </div>
            <div class="col">
                <form action="/category/{{ $category->id }}" method="post">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                </form>
            </div>
    </div>
    @endforeach
@endsection
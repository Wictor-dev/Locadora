@extends('layouts.main') <!-- Extende o arquivo main dentro da pasta layouts -->

@section('title','home') <!-- Manda o título para o campo yield(title) no arquivo main.blade.php na pasta layouts -->

@section('content') <!-- Manda o conteúdo para o campo yield(content) no arquivo main.blade.php na pasta layouts -->
<div class="container-fluid">
    <div>
        <h1>Ultimos lançamentos</h1>
    </div>
    <div class="row">
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        
    </div>
    <div>
        <h1>Mais assistidos</h1>
    </div>
    <div class="row">
    <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
    </div>
    <div>
        <h1>Melhores avaliados</h1>
    </div>
    <div class="row">
        
    <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
        <div class="col">
            <div class="movie">
                <p>Harry Potter</p>
            </div>
        </div>
    </div>
</div>

@endsection
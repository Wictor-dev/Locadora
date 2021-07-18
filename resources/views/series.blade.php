@extends('layouts.main')

@section('title','series')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <h1>Séries</h1>
        </div>
        <div class="col my-auto">
            <a href="/series/create" class="btn btn-primary" role="button">Criar série</a>
        </div>
    </div>
    <div class="row">
@php
$count = $series->count();
@endphp
@if ($count < 2)
@foreach ($series as $serie)
        <div class="col">
            <div class="card" style="background-color:gray; width:20rem;">
            <img src="/img/got.jpg" alt="">
                <a href="" style="color: white;"><h2 class="card-title">{{ $serie->name_serie }}</h2></a>
                <p class="card-text">{{ $serie->sinopse }}</p>
            </div>
        </div>
@endforeach
@else
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <img class="d-block w-100" src="/img/got.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="col">
                        <img class="d-block w-100" src="/img/got.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="col">
                        <img class="d-block w-100" src="/img/got.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="col">
                        <img class="d-block w-100" src="/img/got.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="col">
                        <img class="d-block w-100" src="/img/got.jpg" alt="Primeiro Slide">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div>
                asdasds
                </div>
                <div>
                asdasds
                </div>
                <div>
                asdasds
                </div>
                <div>
                asdasds
                </div>
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
@endif
</div>
    </div>
</div>
<br>
@endsection
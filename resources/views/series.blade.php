@extends('layouts.main')

@section('title','series')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <h1>Séries Mais recentes</h1>
        </div>
        <div class="col my-auto">
            <a href="/series/create" class="btn btn-primary" role="button">Criar série</a>
        </div>
    </div>
@php
$count = $series->count();
$ids = [];
$series_recentes = array();
for($j = 0; $j< 10; $j++){
    $maior_data = $series[0];
    for ($i=0; $i<$count;$i++){
        if(in_array($series[$i]->id, $ids) != 1){
            if ($series[$i]->date_launch >= $maior_data->date_launch){
                $maior_data = $series[$i];  
            }
        }
    }
    if ($j > $count){
        break;
    }
    $ids[] = $maior_data->id;
    array_push($series_recentes, $maior_data);   
}

@endphp
    <div class="row">
    @if ($count < 6)
    @foreach ($series_recentes as $serie_recente)
        <div class="col">
            <div class="card" style="background-color:black; width:20rem;">
            <img src="/img/series/{{ $serie_recente->image }}" alt="" class="img"> {{-- Concatenando o nome do arquivo com o nome da imagem --}}
                <a href="" style="color: white;"><h2 class="card-title">{{ $serie_recente->name_serie }}</h2></
            </div>
        </div>
    @endforeach
    @else
    {{-- Inicio do carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="0">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="row">
            @for($i=0; $i < 5; $i++)
                <div class="col">
                    <div class="card" style="background-color:black; width:20rem; height: 30rem;">
                    <img src="/img/series/{{ $series_recentes[$i]->image }}" alt="" class="img"> {{-- Concatenando o nome do arquivo com o nome da imagem --}} 
                        <a href="" style="color: white;" ><h2 class="card-title" style=" background: black;">{{ $series_recentes[$i]->name_serie }}</h2></a>
                    </div>
                </div>
            @endfor
            </div>
            </div>
            <div class="carousel-item">
            <div class="row">
            @for ($i=5; $i < $count; $i++)
                <div class="col">
                    <div class="card" style="background-color:black; width:20rem; height: 30rem;">
                    <img src="/img/series/{{ $series_recentes[$i]->image }}" alt="" class="img"> {{-- Concatenando o nome do arquivo com o nome da imagem --}}
                        <a href="" style="color: white;"><h2 class="card-title">{{ $series_recentes[$i]->name_serie }}</h2></a>
                    </div>
                </div>
            @endfor
            </div>
            </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    {{--Fim do carousel--}}
@endif

</div>
<br>
</div>
@endsection
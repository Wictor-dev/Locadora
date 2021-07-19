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
@if ($count < 6)
@foreach ($series as $serie)
        <div class="col">
            <div class="card" style="background-color:gray; width:20rem;">
            <img src="/img/got.jpg" alt="">
                <a href="" style="color: white;"><h2 class="card-title">{{ $serie->name_serie }}</h2></a>
            </div>
        </div>
@endforeach
@else
    @for($i=0; $i < 5; $i++)
        <div class="col">
            <div class="card" style="background-color:gray; width:20rem; height: 29rem;">
            <img src="/img/got.jpg" alt="">
                <a href="" style="color: white;"><h2 class="card-title">{{ $series[$i]->name_serie }}</h2></a>
            </div>
        @if ($i == 4)
            <a href="" class="link-primary" style="float:right;">Ver mais...</a>
        @endif
        </div>
    @endfor
@endif
</div>
    </div>
</div>
<br>
@endsection
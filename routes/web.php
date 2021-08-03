<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EpisodeController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/series', [SerieController::class, 'series']);
Route::get('/series/create', [SerieController::class, 'create']);
Route::get('/series/{id}', [SerieController::class, 'show']);
Route::post('/series', [SerieController::class, 'store']);
Route::get('/series/edit/{id}',[SerieController::class, 'edit']);
Route::put('/series/update/{id}', [SerieController::class, 'update']);
Route::delete('/series/{id}',[SerieController::class, 'destroy']);


Route::get('/categories',[CategoryController::class, 'categories']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}',[CategoryController::class, 'edit']);
Route::put('/category/update/{id}',[CategoryController::class,'update']);
Route::delete('/category/{id}',[CategoryController::class, 'destroy']);

Route::get('/episodes/create', [EpisodeController::class, 'create']);
Route::post('/episodes',[EpisodeController::class, 'store']);



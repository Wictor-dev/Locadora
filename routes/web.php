<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/series', [SerieController::class, 'series']);
Route::get('/series/create', [SerieController::class, 'create']);
Route::get('/series/{id}', [SerieController::class, 'show']);
Route::post('/series', [SerieController::class, 'store']);
Route::get('/series/edit/{id}',[SerieController::class, 'edit']);
Route::put('/series/update/{id}', [SerieController::class, 'update']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);


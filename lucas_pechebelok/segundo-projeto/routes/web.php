<?php

use App\Http\Controllers\SerieController;
<<<<<<< HEAD
use App\Http\Controllers\TemporadasController;
=======
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SerieController::class, 'index'])->name('series.index');
Route::get('/series/create', [SerieController::class, 'create'])->name('series.create');
<<<<<<< HEAD
Route::get('/series/{serieID}/temporadas', [TemporadasController::class, 'index'])->name('temporadas.index');

Route::post('/series', [SerieController::class, 'store'])->name('series.store');
Route::delete('/series/{id}', [SerieController::class, 'destroy'])->name('series.destroy');

=======

Route::post('/series', [SerieController::class, 'store'])->name('series.store');
Route::delete('/series/{id}', [SerieController::class, 'destroy'])->name('series.destroy');
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
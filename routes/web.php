<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
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
    return redirect('/series');
});
Route::controller(SeriesController::class)->group(function () {
    Route::get('/series', 'index')->name('series.index');
    Route::get('/series/criar', 'create')->name('series.create');
    Route::get('/series/editar/{serie}', 'edit')->name('series.edit');
    Route::put('/series/update/{serie}', 'update')->name('series.update');
    Route::post('/series/salvar', 'store')->name('series.store');
    Route::delete('series/destroy/{serie}', 'destroy')->name('series.destroy');
});

Route::get('/series/{serie}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

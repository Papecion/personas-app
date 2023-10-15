<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//COMUNAS 
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');

//MUNICIPIOS
route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index');
route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store');
route::get('/municipios/create', [MunicipioController::class, 'create'])->name('municipios.create');
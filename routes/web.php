<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

route::get('/',[CarroController::class,'index'])->name ('index');
route::get('/cadastrar',[CarroController::class,'showFormCarro'])->name ('formulario-carro');

route::post('/cadastrar',[CarroController::class,'storeCarro'])->name('cadastrar-carro');

route::get('/todosCarro', [CarroController::class,'showGerenciador'])->name('todos-carro');

route::delete('/delete-carro/{id}', [CarroController::class,'destroy'])->name('delete-carro');

route::put('/todosCarro/{id}', [CarroController::class,'update'])->name('alterar-carro');

//partes do alterar
route::get('/alterar/{id}',[CarroController::class,'show'])->name('alterar-carro');
route::put('/alterarBanco/{id}', [CarroController::class,'update'])->name('alterarBanco-carro');
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showFormCarro(){
        return view('cadastrarCarro');
    }

    public function storeCarro(Request $request){

        $carro = $request->validate([
            'marcaCarro' => 'string|required',
            'modeloCarro' => 'string|required',
            'anoCarro' => 'string|required'
        ]);

        Carro::Create($carro);
        return Redirect::route('index');

    }

    public function showGerenciador(Request $request){
        $dados = Carro:: query();
        $dados -> when($request -> marcaCarro, function($query, $marca){
            $query->where('marcaCarro','like','%'.$marca.'%');

        });

        $dados = $dados->get();

        return view('buscarTodosCarro',['carro'=>$dados]);
    }

    public function destroy(Carro $id){
        
        $id->delete();
        return Redirect::route('todos-carro');
    }

    public function update(Carro $id, Request $request){
        $carro = $request->validate([
            'marcaCarro' => 'string|required',
            'modeloCarro' => 'string|required',
            'anoCarro' => 'string|required'
        ]);

        $id->fill($carro);
        $id->save();
        return Redirect::route('todos-carro');
    }

    public function show(Carro $id){

        return view('alterarCarro',['carros'=> $id]);
    }
}

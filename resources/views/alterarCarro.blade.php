@extends('padrao')
@section('content')

<div class="container">
    <form class="row g-3" Method= "Post" action= "{{route('alterarBanco-carro',$carros->id)}}">
        @method('put')
        @csrf>
        <div class="col-md-8">
            <label for="inputMarca" class="form-label">Marca</label>
            <input type="text" class="form-control" value="{{$carros->marcaCarro}}" name ='marcaCarro' id="inputMarca">
        </div>

        <div class="col-md-4">
            <label for="inputModelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" value="{{$carros->modeloCarro}}" name ='modeloCarro' id="inputModelo">
        </div>

        <div class="col-md-4">
            <label for="inputAno" class="form-label">Ano</label>
            <input type="text" class="form-control" value="{{$carros->anoCarro}}" name ='anoCarro'id="inputAno">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>

@endsection
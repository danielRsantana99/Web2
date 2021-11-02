@extends('layouts.main')

@section('titulo','Entrada)

@section('conteudo')
    <form action="{{route('entradas.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
    	<label for="">ID fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor">
        <label for="">Valor total</label>
        <input type="numeric" name="valortotal" id="valortotal">
    	<input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
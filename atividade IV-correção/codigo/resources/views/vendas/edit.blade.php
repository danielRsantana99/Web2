@extends('layouts.main')

@section('titulo','Editar Vendas')

@section('conteudo')
    <form action="{{route('venda.update', ['id' => $vendas->id])}}" method="post">
        @csrf
        @method('PUT')
    	<label for="">Id Cliente</label>
        <input type="text" name="idcliente" id="idcliente">
        <label for="">valortotal</label>
        <input type="text" name="valortotal" id="valortotal">
    	<input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
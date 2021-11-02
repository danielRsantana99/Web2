@extends('layouts.main')

@section('titulo','Criar Entrada)

@section('conteudo')
    <form action="{{route('entradas.store')}}" method="post">
        @csrf
    	<label for="">ID fornecedor</label>
    	<input type="text" name="idfornecedor" id="idfornecedor">
		<label for="">Valor total</label>
    	<input type="numeric" name="valortotal" id="valortotal">
    	<input type="submit" value="Cadastrar">
    </form>
@endsection('conteudo')
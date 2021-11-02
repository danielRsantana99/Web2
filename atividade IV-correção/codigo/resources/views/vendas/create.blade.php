@extends('layouts.main')

@section('titulo','Criar Venda')

@section('conteudo')
    <form action="{{route('venda.store')}}" method="post">
    	<label for="">Id Cliente</label>
    	<input type="text" name="idcliente" id="idcliente">
		<label for="">valortotal</label>
    	<input type="text" name="valortotal" id="valortotal">

    	<input type="submit" value="Cadastrar">
    </form>
@endsection('conteudo')
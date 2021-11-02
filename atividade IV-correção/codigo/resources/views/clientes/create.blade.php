@extends('layouts.main')

@section('titulo','cadastro de clientes')

@section('conteudo')
    <form action="{{route('clientes.store')}}" method="post">
    	<label for="">Nome clientes</label>
    	<input type="text" name="nome" id="nome">
		<label for="">Debito</label>
    	<input type="text" name="debito" id="debito">
    	<label for="">Descrição</label>
    	<input type="text" name="descricao" id="descricao">
    	<input type="submit" value="Cadastrar">
    </form>
@endsection('conteudo')
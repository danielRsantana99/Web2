@extends('layouts.main')

@section('titulo','Criar Fornecedor)

@section('conteudo')
    <form action="{{route('fornecedores.store')}}" method="post">
    	<label for="">Nome Fornecedor</label>
    	<input type="text" name="nome" id="nome">
		<label for="">CNPJ</label>
    	<input type="text" name="cnpj" id="cnpj">
    	<label for="">Endereço</label>
    	<input type="text" name="endereco" id="endereco">
    	<input type="submit" value="Cadastrar">
    </form>
@endsection('conteudo')
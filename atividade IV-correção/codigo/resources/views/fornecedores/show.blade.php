@extends('layouts.main')

@section('titulo','Fornecedor)

@section('conteudo')
	@foreach ($fornecedores as $fornecedor)
	<ul>
		<li>nome do fornecedor: {{$Fornecedores->nome}}</li>
		<li>cnpj do cliente: {{$Fornecedores->cnpj}}</li>
		<li>endereço: {{$Fornecedores->endereco}}</li>
		<li><a href="{{route('fornecedores.edit', ['id' => $fornecedores->id])}}">editar fornecedor</a></li>
	</ul>

	@endforeach
@endsection('conteudo')
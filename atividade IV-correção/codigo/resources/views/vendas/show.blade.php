@extends('layouts.main')

@section('titulo','Venda')

@section('conteudo')
	@foreach ($vendas as $vendas)
	<ul>
		<li>nome do cliente: {{$cliente->nome}}</li>
		<li>debito do cliente: {{$cliente->debito}}</li>
		<li>descrição: {{$cliente->descricao}}</li>
		<li><a href="{{route('venda.edit', ['id' => $vendas>id])}}">editar vendas</a></li>
	</ul>

	@endforeach
@endsection('conteudo')
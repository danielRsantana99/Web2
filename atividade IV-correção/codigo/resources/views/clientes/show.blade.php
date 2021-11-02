@extends('layouts.main')

@section('titulo','Cliente)

@section('conteudo')
	@foreach ($clientes as $cliente)
	<ul>
		<li>nome do cliente: {{$cliente->nome}}</li>
		<li>debito do cliente: {{$cliente->debito}}</li>
		<li>descrição: {{$cliente->descricao}}</li>
		<li><a href="{{route('clientes.edit, ['id' => $clientes->id])}}">editar cliente</a></li>
	</ul>

	@endforeach
@endsection('conteudo')
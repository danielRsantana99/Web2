@extends('layouts.main')

@section('titulo','pagina de clientes')

@section('conteudo')

	@foreach ($clientes as $cliente)
	<ul>
		<li>nome do cliente: {{$cliente->nome}}</li>
		<li>debito do cliente: {{$cliente->debito}}</li>
		<li>descrição: {{$cliente->descricao}}</li>
		<li><a href="{{route('clientes.edit, ['id' => $clientes->id])}}">editar cliente</a></li>
		<form action="{{route('clientes.destroy',['id' => $cliente->id])}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="deletar">
		</form>
	</ul>

	@endforeach
@endsection('conteudo')
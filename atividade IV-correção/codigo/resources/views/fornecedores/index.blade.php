@extends('layouts.main')

@section('titulo','Fornecedores)

@section('conteudo')
	@foreach ($fornecedores as $fornecedor)
	<ul>
		<li>nome do fornecedor: {{$Fornecedores->nome}}</li>
		<li>cnpj do cliente: {{$Fornecedores->cnpj}}</li>
		<li>endereço: {{$Fornecedores->endereco}}</li>
		<li><a href="{{route('fornecedores.edit', ['id' => $fornecedores->id])}}">editar fornecedor</a></li>
		<form action="{{route('fornecedores.destroy', ['id' => $fornecedores->id])}} method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="deletar">
		</form>
	</ul>

	@endforeach
@endsection('conteudo')
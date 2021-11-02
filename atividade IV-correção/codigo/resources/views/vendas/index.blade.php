@extends('layouts.main')

@section('titulo','Vendas')

@section('conteudo')
	@foreach ($vendas as $venda)
	<ul>
		<li>id cliente: {{$venda->idcliente}}</li>
		<li>valor total: {{$venda->valortotal}}</li>
		<li><a href="{{route('venda.edit', ['id' => $vendas>id])}}">editar cliente</a></li>
		<form action="{{route('venda.destroy', ['id' => $vendas->id])}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="deletar">
		</form>
	</ul>

	@endforeach
@endsection('conteudo')
@extends('layouts.main')

@section('titulo','Produtos')

@section('conteudo')
	@foreach ($produtos as $produto)
	<ul>
		<li>nome: {{$produto->nome}}</li>
		<li>icms: {{$produto->icms}}</li>
		<li>ipi: {{$produto->ipi}}</li>
		<li>frete: {{$produto->frete}}</li>
		<li>preço fabrica: {{$produto->precofabrica}}</li>
		<li>preço compra: {{$produto->precocompra}}</li>
		<li>preço venda: {{$produto->precovenda}}</li>
		<li>lucro: {{$produto->lucro}}</li>
		<li>desconto: {{$produto->desconto}}</li>
		<li>quantidade: {{$produto->quantidade}}</li>
		<li><a href="{{route('produto.edit', ['id' => $produto->id])}}">editar cliente</a></li>
		<form action="{{route('produto.destroy', ['id' => $produto->id])}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="deletar">
		</form>
	</ul>

	@endforeach
@endsection('conteudo')
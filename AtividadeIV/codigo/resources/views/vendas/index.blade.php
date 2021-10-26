<h1>Pagina de vendas</h1>

@foreach ($vendas as $venda)
<ul>
	<li>id cliente: {{$venda->idcliente}}</li>
	<li>valor total: {{$venda->valortotal}}</li>
	<li><a href="/vendas/edit/{{$vendas->id}}">editar cliente</a></li>
	<form action="vendas/{{$venda->id}}" method="POST">
		@csrf
		@method('DELETE')
		<input type="submit" value="deletar">
	</form>
</ul>

@endforeach
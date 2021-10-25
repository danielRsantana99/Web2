<h1>Pagina de clientes</h1>

@foreach ($clientes as $cliente)
<ul>
	<li>nome do cliente: {{$cliente->nome}}</li>
	<li>debito do cliente: {{$cliente->debito}}</li>
	<li>descrição: {{$cliente->descricao}}</li>
	<li><a href="/clientes/edit/{{$clientes->id}}">editar cliente</a></li>
	<form action="clientes/{{$cliente->id}}" method="POST">
		@csrf
		@method('DELETE')
		<input type="submit" value="deletar">
	</form>
</ul>

@endforeach
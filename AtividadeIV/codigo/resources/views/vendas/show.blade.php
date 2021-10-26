<h1> pagina de consulta de clientes</h1>>

@foreach ($vendas as $vendas)
<ul>
	<li>nome do cliente: {{$cliente->nome}}</li>
	<li>debito do cliente: {{$cliente->debito}}</li>
	<li>descrição: {{$cliente->descricao}}</li>
	<li><a href="/vendas/edit/{{$vendas->id}}">editar vendas</a></li>
</ul>

@endforeach
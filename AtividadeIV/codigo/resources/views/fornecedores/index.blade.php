<h1>Pagina de Fornecedores</h1>

@foreach ($fornecedores as $fornecedor)
<ul>
	<li>nome do fornecedor: {{$Fornecedores->nome}}</li>
	<li>cnpj do cliente: {{$Fornecedores->cnpj}}</li>
	<li>endereço: {{$Fornecedores->endereco}}</li>
	<li><a href="/fornecedores/edit/{{$fornecedores->id}}">editar fornecedor</a></li>
	<form action="fornecedores/{{$fornecedor->id}}" method="POST">
		@csrf
		@method('DELETE')
		<input type="submit" value="deletar">
	</form>
</ul>

@endforeach
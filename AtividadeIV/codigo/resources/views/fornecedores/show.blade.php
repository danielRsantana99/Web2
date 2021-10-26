<h1> pagina de consulta de clientes</h1>>

@foreach ($fornecedores as $fornecedor)
<ul>
	<li>nome do fornecedor: {{$Fornecedores->nome}}</li>
	<li>cnpj do cliente: {{$Fornecedores->cnpj}}</li>
	<li>endereço: {{$Fornecedores->endereco}}</li>
	<li><a href="/fornecedores/edit/{{$fornecedores->id}}">editar fornecedor</a></li>
</ul>

@endforeach
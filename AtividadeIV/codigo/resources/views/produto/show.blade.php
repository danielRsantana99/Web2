<h1> pagina de consulta de clientes</h1>>

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
	<li><a href="/produto/edit/{{$produtos->id}}">editar Produto</a></li>
</ul>

@endforeach
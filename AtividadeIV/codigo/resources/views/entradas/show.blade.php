<h1> pagina de consulta de clientes</h1>>

@foreach ($entradas as $entrada)
<ul>
	<li>id fornecedor: {{$entrada->idfornecedor}}</li>
	<li>valor total: {{$entrada->valortotal}}</li>
	<li></li>
	<li><a href="/entradas/edit/{{$entradas->id}}">editar entrada</a></li>
</ul>

@endforeach
<h1>Pagina de entradas</h1>

@foreach ($entradas as $entrada)
<ul>
	<li>id fornecedor: {{$entrada->idfornecedor}}</li>
	<li>valor total: {{$entrada->valortotal}}</li>
	<li></li>
	<li><a href="/entradas/edit/{{$entradas->id}}">editar cliente</a></li>
	<form action="entradas/{{$entrada->id}}" method="POST">
		@csrf
		@method('DELETE')
		<input type="submit" value="deletar">
	</form>
</ul>

@endforeach
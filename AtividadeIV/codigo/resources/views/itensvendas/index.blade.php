<h1>Pagina de itensvenda</h1>

@foreach ($itensvendas as $itensvenda)
<ul>
	<li></li>
	<li></li>
	<li></li>
	<li><a href="/itensvendas/edit/{{$itensvendas->id}}">editar itensvenda</a></li>
	<form action="itensvendas/{{$itensvenda->id}}" method="POST">
		@csrf
		@method('DELETE')
		<input type="submit" value="deletar">
	</form>
</ul>

@endforeach
<h1>Pagina de itensentrada</h1>

@foreach ($itensentradas as $itensentrada)
<ul>
	<li></li>
	<li></li>
	<li></li>
	<li><a href="/itensentradas/edit/{{$itensentradas->id}}">editar itensentrada</a></li>
	<form action="itensentradas/{{$itensentrada->id}}" method="POST">
		@csrf
		@method('DELETE')
		<input type="submit" value="deletar">
	</form>
</ul>

@endforeach
@extends('layouts.main')

@section('titulo','ItensEntradas)

@section('conteudo')
  
	@foreach ($itensentradas as $itensentrada)
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li><a href="{{route('itensentradas.edit', ['id' => $itensentrada->id])}}">editar itensentrada</a></li>
		<form action="{{route('itensentradas.destroy', ['id' => $itensentrada->id])}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="deletar">
		</form>
	</ul>

	@endforeach
@endsection('conteudo')
@extends('layouts.main')

@section('titulo','ItensEntradas)

@section('conteudo')
  

	@foreach ($itensvendas as $itensvenda)
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li><a href="{{route('itensvenda.edit', ['id' => $itensvenda->id])}}">editar itensvenda</a></li>
		<form action="{{route('itensvenda.destroy', ['id' => $itensvenda->id])}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="deletar">
		</form>
	</ul>

	@endforeach
@endsection('conteudo')
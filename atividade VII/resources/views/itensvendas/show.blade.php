@extends('layouts.main')

@section('titulo','ItensEntradas)

@section('conteudo')
	@foreach ($itensvendas as $itensvenda)
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li><a href="{{route('itensvenda.edit', ['id' => $itensvenda->id])}}">editar itensvenda</a></li>
	</ul>

	@endforeach
@endsection('conteudo')
@extends('layouts.main')

@section('titulo','ItemEntrada)

@section('conteudo')
	@foreach ($itensentradas as $itementrada)
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li><a href="{{route('itensentradas.edit', ['id' => $itensentrada->id])}}">editar itensentrada</a></li>
	</ul>

	@endforeach
@endsection('conteudo')
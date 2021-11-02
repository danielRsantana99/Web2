@extends('layouts.main')

@section('titulo','Entrada)

@section('conteudo')
	@foreach ($entradas as $entrada)
	<ul>
		<li>id fornecedor: {{$entrada->idfornecedor}}</li>
		<li>valor total: {{$entrada->valortotal}}</li>
		<li></li>
		<li><a href="{{route('entradas.edit, ['id' => $entradas->id])}}">editar entrada</a></li>
	</ul>

	@endforeach
@endsection('conteudo')
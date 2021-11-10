@extends('layouts.main')

@section('titulo','Entrada)

@section('conteudo')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID FORNECEDOR</th>
	      <th scope="col">VALOR TOTAL</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($entradas as $entrada)
	    <tr>
	      <td>{{$entrada->idfornecedor}}</td>
	      <td>{{$entrada->valortotal}}</td>
	      <td>
	      	<a href="{{route('entradas.edit, ['id' => $entradas->id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
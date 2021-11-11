@extends('layouts.main')

@section('titulo','Venda')

@section('conteudo')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID CLIENTE</th>
	      <th scope="col">VALOR TOTAL</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($vendas as $venda)
	    <tr>
	      <td>{{$venda->idcliente}}</td>
	      <td>{{$venda->valortotal}}</td>
	      <td>
	      	<a href="{{route('venda.edit', ['id' => $vendas>id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
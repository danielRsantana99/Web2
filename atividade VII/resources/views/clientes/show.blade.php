
@extends('layouts.main')

@section('titulo','Cliente')

@section('conteudo')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">NOME</th>
	      <th scope="col">DEBITO</th>
	      <th scope="col">DESCRIÇÃO</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($clientes as $cliente)
	    <tr>
	      <td>{{$cliente->nome}}</td>
	      <td>{{$cliente->debito}}</td>
	      <td>{{$cliente->descricao}}</td>
	      <td>
	      	<a href="{{route('clientes.edit, ['id' => $clientes->id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')



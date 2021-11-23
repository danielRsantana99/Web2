@extends('layouts.main')

@section('titulo','Fornecedor)

@section('conteudo')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">NOME</th>
	      <th scope="col">CNPJ</th>
	      <th scope="col">ENDEREÇO</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($fornecedores as $fornecedor)
	    <tr>
	      <td>{{$Fornecedores->nome}}</td>
	      <td>{{$Fornecedores->cnpj}}</td>
	      <td>{{$Fornecedores->endereco}}</td>
	      <td>
	      	<a href="{{route('fornecedores.edit', ['id' => $fornecedores->id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
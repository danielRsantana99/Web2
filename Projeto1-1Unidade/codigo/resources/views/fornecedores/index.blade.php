@extends('layouts.main')

@section('titulo','Fornecedores)

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
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('fornecedores.edit', ['id' => $fornecedores->id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('fornecedores.destroy', ['id' => $fornecedores->id])}}" method="POST">
						@csrf
						@method('DELETE')
						<input class="btn btn-danger" type="submit" value="DELETAR">
					</form>
	      		</div>
	      	</div>
	      	
	      	
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
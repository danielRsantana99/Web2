@extends('layouts.main')

@section('titulo','Fornecedores')

@section('conteudo')
	<div class="row">
      <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('fornecedores/create'); }}" class="btn btn-primary" >CADASTRAR NOVO FORNECEDOR</a>
        </div>
         
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">NOME</th>
	      <th scope="col">ENDEREÇO</th>
	      <th scope="col">TELEFONE</th>
	      <th scope="col">CNPJ</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($fornecedores as $key)
	    <tr>
	      <td>{{$key->nome}}</td>
	      <td>{{$key->endereco}}</td>
	      <td>{{$key->telefone}}</td>
	      <td>{{$key->cnpj}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<form action="{{route('fornecedores.edit',['id' => $key->id])}}" method="GET">
						<input class="btn btn-warning" type="submit" value="EDITAR">
					</form>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('fornecedores.destroy',['id' => $key->id])}}" method="POST">
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
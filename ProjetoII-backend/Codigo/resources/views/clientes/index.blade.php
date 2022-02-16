@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')
	<div class="row">
        <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('clientes/create'); }}" class="btn btn-primary" >CADASTRAR NOVO CLIENTE</a>
        </div>
         
	</div>
	<br>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">NOME</th>
	      <th scope="col">TELEFONE</th>
	      <th scope="col">CPF</th>
	      <th scope="col">CNPJ</th>
	      <th scope="col">DEBITO</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($cliente as $key)
	    <tr>
	      <td>{{$key->nome}}</td>
	      <td>{{$key->telefone}}</td>
	      <td>{{$key->cpf}}</td>
	      <td>{{$key->cnpj}}</td>
	      <td>{{$key->debito}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<form action="{{route('clientes.edit',['id' => $key->id])}}" method="GET">
						<input class="btn btn-warning" type="submit" value="EDITAR">
					</form>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('clientes.destroy',['id' => $key->id])}}" method="POST">
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
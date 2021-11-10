@extends('layouts.main')

@section('titulo','Clientes')

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
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('clientes.edit, ['id' => $clientes->id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('clientes.destroy',['id' => $cliente->id])}}" method="POST">
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
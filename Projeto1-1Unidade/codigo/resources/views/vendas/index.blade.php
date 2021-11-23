@extends('layouts.main')

@section('titulo','Vendas')

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
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('venda.edit', ['id' => $vendas>id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('venda.destroy', ['id' => $vendas->id])}}" method="POST">
						@csrf
						@method('DELETE')
						<input class="btn btn-danger"  type="submit" value="DELETAR">
					</form>
	      		</div>
	      	</div>
	      	
	      	
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
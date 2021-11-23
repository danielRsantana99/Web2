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
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary"  href="{{route('entradas.edit, ['id' => $entradas->id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('entradas.destroy ['id' => $entradas->id])}}" method="POST">
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
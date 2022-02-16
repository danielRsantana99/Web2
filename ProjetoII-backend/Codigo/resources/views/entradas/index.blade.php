@extends('layouts.main')

@section('titulo','Entrada')

@section('conteudo')
	<div class="row">
        <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('entradas/create'); }}" class="btn btn-primary" >CADASTRAR NOVA ENTRADA</a>
        </div>
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID FORNECEDOR</th>
	      <th scope="col">VALOR TOTAL</th>
	      <th scope="col">DATA COMPRA</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($entrada as $key)
	    <tr>
	      <td>{{$key->idfornecedor}}</td>
	      <td>{{$key->valortotal}}</td>
	       <td>{{$key->datacompra}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<form action="{{route('entradas.edit',['id' => $key->id])}}" method="GET">
						<input class="btn btn-warning" type="submit" value="EDITAR">
					</form>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('entradas.destroy',['id' => $key->id])}}" method="POST">
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
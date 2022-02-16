@extends('layouts.main')

@section('titulo','Venda')

@section('conteudo')
	<div class="row">
		<div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('venda/create'); }}" class="btn btn-primary" >CADASTRAR NOVA VENDA</a>
        </div>
        <br>
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID CLIENTE</th>
	      <th scope="col">FORMA DE PAGAMENTO</th>
	      <th scope="col">CONDIÇÃO DE PAGAMENTO</th>
	      <th scope="col">DATA</th>
	      <th scope="col">VALOR TOTAL</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($vendas as $key)
	    <tr>
	      <td>{{$key->idcliente}}</td>
	      <td>{{$key->formapagamento}}</td>
	      <td>{{$key->condicaopagamento}}</td>
	      <td>{{$key->data}}</td>
	      <td>{{$key->valortotal}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('venda.edit', ['id' => $key>id])}}">editar cliente</a>
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
@extends('layouts.main')

@section('titulo','Produtos')

@section('conteudo')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">NOME</th>
	      <th scope="col">ICMS</th>
	      <th scope="col">IPI</th>
	      <th scope="col">FRETE</th>
	      <th scope="col">PREÇO FABRICA</th>
	      <th scope="col">PREÇO COMPRA</th>
	      <th scope="col">PREÇO VENDA</th>
	      <th scope="col">LUCRO</th>
	      <th scope="col">DESCONTO</th>
	      <th scope="col">QUANTIDADE</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($produtos as $produto)
	    <tr>
	      <td>{{$produto->nome}}</td>
	      <td>{{$produto->icms}}</td>
	      <td>{{$produto->ipi}}</td>
	      <td>{{$produto->frete}}</td>
	      <td>{{$produto->precofabrica}}</td>
	      <td>{{$produto->precocompra}}</td>
	      <td>{{$produto->precovenda}}</td>
	      <td>{{$produto->lucro}}</td>
	      <td>{{$produto->desconto}}</td>
	      <td>{{$produto->quantidade}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('produto.edit', ['id' => $produto->id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('produto.destroy', ['id' => $produto->id])}}" method="POST">
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
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
	      	<a href="{{route('produto.edit', ['id' => $produto->id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
@extends('layouts.main')

@section('titulo','Venda')

@section('conteudo')
	<div class="row">
		<div class="col-sm-4">
            <div class="form-form-group">
                <label class="h6 small d-block text-uppercase">
                    Pesquisar
                </label>
                <input class="form-control" type="text" name="pesquisa" id="pesquisa" placeholder="">
              
            </div>
        </div>
        <div class="col-sm-4" style="margin-top: 24px;">
            <input name="submit" type="submit" class="btn btn-primary" value="PESQUISAR">
        </div>
        <div class="col-sm-4" style="margin-top: 24px;">
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR VENDAS">
        </div> 
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
	  	@foreach ($vendas as $venda)
	    <tr>
	      <td>{{$venda->idcliente}}</td>
	      <td>{{$venda->formapagamento}}</td>
	      <td>{{$venda->condicaopagamento}}</td>
	      <td>{{$venda->data}}</td>
	      <td>{{$venda->valortotal}}</td>
	      <td>
	      	<a href="{{route('venda.edit', ['id' => $vendas>id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
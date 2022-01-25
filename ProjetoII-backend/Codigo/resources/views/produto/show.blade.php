@extends('layouts.main')

@section('titulo','Produtos')

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR PRODUTO">
        </div> 
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">NOME PRODUTO</th>
	      <th scope="col">MOTOR</th>
	      <th scope="col">CARRO</th>
	      <th scope="col">VALVULA</th>
	      <th scope="col">FABRICAÇÃO</th>
	      <th scope="col">CATEGORIA</th>
	      <th scope="col">MARCA</th>
	      <th scope="col">LOCALIZAÇÃO</th>
	      <th scope="col">REFERENCIA</th>
	      <th scope="col">UNIDADE</th>
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
	      <td>{{$produto->idmotor}}</td>
	      <td>{{$produto->idcarro}}</td>
	      <td>{{$produto->idvalvula}}</td>
	      <td>{{$produto->idfabricacao}}</td>
	      <td>{{$produto->idcategoria}}</td>
	      <td>{{$produto->idmarca}}</td>
	      <td>{{$produto->idlocalizacao}}</td>
	      <td>{{$produto->referencia}}</td>
	      <td>{{$produto->unidade}}</td>
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
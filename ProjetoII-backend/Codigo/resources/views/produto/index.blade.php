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
	  	@foreach ($produtos as $key)
	    <tr>
	      
	      <td>{{$key->idmotor}}</td>
	      <td>{{$key->idcarro}}</td>
	      <td>{{$key->idvalvula}}</td>
	      <td>{{$key->idfabricacao}}</td>
	      <td>{{$key->idcategoria}}</td>
	      <td>{{$key->idmarca}}</td>
	      <td>{{$key->idlocalizacao}}</td>
	      <td>{{$key->referencia}}</td>
	      <td>{{$key->unidade}}</td>
	      <td>{{$key->icms}}</td>
	      <td>{{$key->ipi}}</td>
	      <td>{{$key->frete}}</td>
	      <td>{{$key->precofabrica}}</td>
	      <td>{{$key->precocompra}}</td>
	      <td>{{$key->precovenda}}</td>
	      <td>{{$key->lucro}}</td>
	      <td>{{$key->desconto}}</td>
	      <td>{{$key->quantidade}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('produto.edit', ['id' => $key->id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('produto.destroy', ['id' => $key->id])}}" method="POST">
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
@extends('layouts.main')

@section('titulo','ItensEntrada)

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR ITENSENTRADA">
        </div>
         
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">NOME PRODUTO</th>
	      <th scope="col">PREÇO COMPRA</th>
	      <th scope="col">QUANTIDADE</th>
	      <th scope="col">UNIDADE</th>
	      <th scope="col">IPI</th>
	      <th scope="col">FRETE</th>
	      <th scope="col">ICMS</th>

	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
	@foreach ($itensentradas as $key)
	    <tr>
	      <td>{{$key->idproduto}}</td>
	      <td>{{$key->precocompra}}</td>
	      <td>{{$key->quantidade}}</td>
	      <td>{{$key->unidade}}</td>
	      <td>{{$key->ipi}}</td>
	      <td>{{$key->frete}}</td>
	      <td>{{$key->icms}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('itensentradas.edit', ['id' => $key->id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('itensentradas.destroy', ['id' => $key->id])}}" method="POST">
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
@extends('layouts.main')

@section('titulo','ItenSEntrada)

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
	@foreach ($itensentradas as $itensentrada)
	    <tr>
	      <td>{{$itensentradas->idproduto}}</td>
	      <td>{{$itensentradas->precocompra}}</td>
	      <td>{{$itensentradas->quantidade}}</td>
	      <td>{{$$itensentradas->unidade}}</td>
	      <td>{{$$itensentradas->ipi}}</td>
	      <td>{{$$itensentradas->frete}}</td>
	      <td>{{$$itensentradas->icms}}</td>
	      <td>
	      	<a href="{{route('itensentradas.edit', ['id' => $itensentrada->id])}}">editar itens entrada</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
	
@endsection('conteudo')
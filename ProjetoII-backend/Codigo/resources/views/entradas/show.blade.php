@extends('layouts.main')

@section('titulo','Entrada)

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR ENTRADA">
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
	  	@foreach ($entradas as $entrada)
	    <tr>
	      <td>{{$entrada->idfornecedor}}</td>
	      <td>{{$entrada->valortotal}}</td>
	       <td>{{$entrada->datacompra}}</td>
	      <td>
	      	<a href="{{route('entradas.edit, ['id' => $entradas->id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
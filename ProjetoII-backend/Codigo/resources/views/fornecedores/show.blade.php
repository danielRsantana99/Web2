@extends('layouts.main')

@section('titulo','Fornecedor)

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR FORNECEDOR">
        </div>
         
	</div>
	<table class="table">
	  <thead>
	      <th scope="col">NOME</th>
	      <th scope="col">ENDEREÇO</th>
	      <th scope="col">TELEFONE</th>
	      <th scope="col">CNPJ</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($fornecedores as $fornecedor)
	    <tr>
	      <td>{{$Fornecedores->nome}}</td>
	      <td>{{$Fornecedores->endereco}}</td>
	      <td>{{$Fornecedores->telefone}}</td>
	      <td>{{$Fornecedores->cnpj}}</td>
	      <td>
	      	<a href="{{route('fornecedores.edit', ['id' => $fornecedores->id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')
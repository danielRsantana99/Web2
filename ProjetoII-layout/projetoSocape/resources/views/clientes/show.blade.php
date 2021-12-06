
@extends('layouts.main')

@section('titulo','Cliente')

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR CLIENTE">
        </div>
         
	</div>
	<table class="table">
	  <thead>
	   tr>
	      <th scope="col">NOME</th>
	      <th scope="col">TELEFONE</th>
	      <th scope="col">CPF</th>
	      <th scope="col">CNPJ</th>
	      <th scope="col">DEBITO</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($clientes as $cliente)
	    <tr>
	      <td>{{$cliente->nome}}</td>
	      <td>{{$cliente->telefone}}</td>
	      <td>{{$cliente->cpf}}</td>
	      <td>{{$cliente->cnpj}}</td>
	      <td>{{$cliente->debito}}</td>
	      <td>
	      	<a href="{{route('clientes.edit, ['id' => $clientes->id])}}">editar cliente</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')



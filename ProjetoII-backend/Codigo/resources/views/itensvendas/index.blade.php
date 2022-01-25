@extends('layouts.main')

@section('titulo','ItensVenda)

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR ITENSVENDA">
        </div> 
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">QUANTIDADE</th>
	      <th scope="col">VALOR VENDA</th>
	      <th scope="col">DESCONTO</th>
	      <th scope="col">LUCRO</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
	@foreach ($itensvenda as $key)
	<tr>
		<td>{{$key->quantidade}}<</td>
		<td>{{$key->valorvenda}}</td>
		<td>{{$key->desconto}}</td>
		<td>{{$key->lucro}}</td>
		<td><a href="{{route('itensvenda.edit', ['id' => $itensvenda->id])}}">editar itensvenda</a></td>
		<form action="{{route('itensvenda.destroy', ['id' => $key->id])}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" value="deletar">
		</form>
	</tr>

	@endforeach
@endsection('conteudo')
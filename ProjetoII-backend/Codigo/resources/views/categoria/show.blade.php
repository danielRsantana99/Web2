
@extends('layouts.main')

@section('titulo','Categoria')

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR FABRICAÇÃO">
        </div>
         
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">CATEGORIA</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($ as $)
	    <tr>
	      <td>{{$->}}</td>
	      <td>
	      	<a href="{{route('.edit, ['id' => $->id])}}">editar categoria</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection('conteudo')


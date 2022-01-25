@extends('layouts.main')

@section('titulo','Valvula')

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR VALVULA">
        </div> 
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">QUANTIDADE</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($valvulas as $key)
	    <tr>
	      <td>{{$key->quantidade}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('.edit, ['id' => $->id])}}">editar valvula</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('.destroy',['id' => $->id])}}" method="POST">
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
@extends('layouts.main')

@section('titulo','Carro')

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR CARRO">
        </div>
         
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">POTÊNCIA</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($carros as $Carro)
	    <tr>
	      <td>{{$->}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('carro.edit, ['id' => $carros->id])}}">editar motor</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('carro.destroy',['id' => $carros->id])}}" method="POST">
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
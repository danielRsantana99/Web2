@extends('layouts.main')

@section('titulo','Fabricação')

@section('conteudo')
	<div class="row">
         <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('fabricação/create'); }}" class="btn btn-primary" >CADASTRAR NOVA FABRICAÇÃO</a>
        </div>
         
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">POTÊNCIA</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($fabricacao as $key)
	    <tr>
	      <td>{{$key->ano}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('fabricação.edit, ['id' => $fabricacao->id])}}">editar motor</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('fabricação.destroy',['id' => $fabricacao->id])}}" method="POST">
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
@extends('layouts.main')

@section('titulo','Valvula')

@section('conteudo')
	<div class="row">
		  <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('valvula/create'); }}" class="btn btn-primary" >CADASTRAR NOVA VALVULA</a>
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
	      			<a class="btn btn-primary" href="{{route('valvula.edit, ['id' => $valvula->id])}}">editar valvula</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('valvula.destroy',['id' => $valvula->id])}}" method="POST">
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
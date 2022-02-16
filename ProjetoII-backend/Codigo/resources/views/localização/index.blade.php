@extends('layouts.main')

@section('titulo','Localização')

@section('conteudo')
	<div class="row">
	    <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('localização/create'); }}" class="btn btn-primary" >CADASTRAR NOVA LOCALIZAÇÃO</a>
        </div>
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">DEPARTAMENTO</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($localizacao as $key)
	    <tr>
	      <td>{{$key->departamento}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('localização.edit, ['id' => $localização->id])}}">editar localização</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('localização.destroy',['id' => $localização->id])}}" method="POST">
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
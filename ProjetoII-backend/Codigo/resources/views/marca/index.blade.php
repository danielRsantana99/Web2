@extends('layouts.main')

@section('titulo','Marca')

@section('conteudo')
	<div class="row">
		  <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('marca/create'); }}" class="btn btn-primary" >CADASTRAR NOVA MARCA</a>
        </div>
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">MARCA</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($marca as $key)
	    <tr>
	      <td>{{$key->marca}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('marca.edit, ['id' => $marca->id])}}">editar marca</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('marca.destroy',['id' => $marca->id])}}" method="POST">
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
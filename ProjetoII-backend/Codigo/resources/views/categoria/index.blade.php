@extends('layouts.main')

@section('titulo','Categoria')

@section('conteudo')
	<div class="row">
        <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('categoria/create'); }}" class="btn btn-primary" >CADASTRAR NOVA CATEGORIA</a>
        </div>     
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">CATEGORIA</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($categoria as $key)
	    <tr>
	      <td>{{$key->categoria}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('categoria.edit, ['id' => $key->id])}}">editar categoria</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('categoria.destroy',['id' => $key->id])}}" method="POST">
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
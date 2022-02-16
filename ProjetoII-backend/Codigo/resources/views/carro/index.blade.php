@extends('layouts.main')

@section('titulo','Carro')

@section('conteudo')
	<div class="row">
		<div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('carro/create'); }}" class="btn btn-primary" >CADASTRAR NOVO CARRO</a>
        </div>
         
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">POTÊNCIA</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($carros as $key)
	    <tr>
	      <td>{{$key->potencia}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('carro.edit, ['id' => $key->id])}}">editar motor</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('carro.destroy',['id' => $key->id])}}" method="POST">
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
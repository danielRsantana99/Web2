@extends('layouts.main')

@section('titulo','Motor')

@section('conteudo')
	<div class="row">
		  <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('motor/create'); }}" class="btn btn-primary" >CADASTRAR NOVO MOTOR</a>
        </div>
   	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">POTÊNCIA</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>  
      @foreach ($motor as $key)
	    <tr>
	      <td>{{$key->potencia}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('motor.edit, ['id' => $motor->id])}}">editar motor</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('motor.destroy',['id' => $motor->id])}}" method="POST">
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
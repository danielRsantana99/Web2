@extends('layouts.main')

@section('titulo','Produtos')

@section('conteudo')
	<div class="row">
         <div class="col-sm-4" style="margin-top: 24px;">
            <a href="{{ URL::asset('produto/create'); }}" class="btn btn-primary" >CADASTRAR NOVO PRODUTO</a>
        </div>
	</div>
	<div class="table-responsive">
		<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">DADOS BASICOS</th>
	      <th scope="col">REFERENCIA</th>
	      <th scope="col">UNIDADE</th>
	      <th scope="col">IMPOSTOS</th>
	      <th scope="col">PREÇOS</th>
	      <th scope="col">QUANTIDADE</th>
	      <th scope="col">OPÇÕES</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($produtos as $key)
	    <tr>
	      
	      <td>MOTOR: {{$key->idmotor}} <br>
      	  	CARRO: {{$key->idcarro}} <br>
      	  	VALVULA: {{$key->idvalvula}} <br>
      	  	FABRICAÇÃO: {{$key->idfabricacao}} <br>
			CATEGORIA: {{$key->idcategoria}} <br>
			MARCA: {{$key->idmarca}} <br>
			LOCALIZAÇÃO: {{$key->idlocalizacao}}
	      </td>
	      <td>{{$key->referencia}}</td>
	      <td>{{$key->unidade}}</td>
	      <td>ICMS: {{$key->icms}} <br>
	      	IPI: {{$key->ipi}} <br>
	      	FRETE: {{$key->frete}} <br>
			LUCRO: {{$key->lucro}} <br>
			DESCONTO: {{$key->desconto}}
	      </td>
	      <td>FABRICA: {{$key->precofabrica}} <br>
      		VENDA:{{$key->precovenda}} <br>
  			COMPRA: {{$key->precocompra}}</td>
	      <td>{{$key->quantidade}}</td>
	      <td>
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<a class="btn btn-primary" href="{{route('produto.edit', ['id' => $key->id])}}">editar cliente</a>
	      		</div>
	      		<div class="col-sm-6">
	      			<form action="{{route('produto.destroy', ['id' => $key->id])}}" method="POST">
						@csrf
						@method('DELETE')
						<input class="btn btn-danger"  type="submit" value="DELETAR">
					</form>
	      		</div>
	      	</div>
	      	
	      	
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
	</div>
	
@endsection('conteudo')
@extends('layouts.main')

@section('titulo','ItensVenda)

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
            <input name="submit" type="submit" class="btn btn-primary" value="CADASTRAR ITENSVENDA">
        </div> 
	</div>
	@foreach ($itensvendas as $itensvenda)
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li><a href="{{route('itensvenda.edit', ['id' => $itensvenda->id])}}">editar itensvenda</a></li>
	</ul>

	@endforeach
@endsection('conteudo')
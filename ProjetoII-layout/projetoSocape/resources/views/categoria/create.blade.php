@extends('layouts.main')

@section('titulo','Cadastrar Categoria')

@section('conteudo')
    <form class="contact_form" action="{{route('')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        CATEGORIA
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('categoria') is-invalid @enderror" type="text" name="categoria" id="categoria" placeholder="">
                        @error('categoria')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <input name="submit" type="submit" class="btn btn-block btn-primary" value="CADASTRAR">
        </div>
    </form>
@endsection('conteudo')
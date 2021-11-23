@extends('layouts.main')

@section('titulo','Cadastrar Cliente')

@section('conteudo')
    <form class="contact_form" action="{{route('clientes.create')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        NOME CLIENTE
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" id="nome" placeholder="">
                        @error('nome')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        DEBITO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('debito') is-invalid @enderror" type="text" name="debito" id="debito" placeholder="">
                        @error('debito')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        DESCRISÃO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('valortotal') is-invalid @enderror" type="numeric" name="valortotal" id="valortotal" placeholder="">
                        @error('valortotal')
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
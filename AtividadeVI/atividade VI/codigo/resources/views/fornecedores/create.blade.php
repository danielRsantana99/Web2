@extends('layouts.main')

@section('titulo','Criar Fornecedor')

@section('conteudo')
 
    <form class="contact_form" action="{{route('fornecedores.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        NOME FORNECEDOR
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" id="nome" required="" placeholder="">
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
                        CNPJ
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('cnpj') is-invalid @enderror"  type="text" name="cnpj" id="cnpj" required="" placeholder="">
                         @error('cnpj')
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
                        ENDEREÇO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('endereco') is-invalid @enderror"  type="text" name="endereco" id="endereco" required="" placeholder="">
                         @error('endereco')
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
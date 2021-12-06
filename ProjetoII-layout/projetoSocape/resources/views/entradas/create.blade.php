@extends('layouts.main')

@section('titulo','Criar Entrada')

@section('conteudo')
 
    <form class="contact_form" action="{{route('entradas.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        ID FORNECEDOR
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('idfornecedor') is-invalid @enderror" type="text" name="idfornecedor" id="idfornecedor"  placeholder="">
                        @error('idfornecedor')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        VALOR TOTAL
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
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        DATA COMPRA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('data_compra') is-invalid @enderror" type="date" name="data_compra" id="data_compra" placeholder="">
                        @error('data_compra')
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
@extends('layouts.main')

@section('titulo','Criar Venda')

@section('conteudo')

	<form class="contact_form" action="{{route('venda.store')}}" method="POST">
		@csrf
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        ID CLIENTE
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('idcliente') is-invalid @enderror" type="text" name="idcliente" id="idcliente" placeholder="">
                        @error('idcliente')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        FORMA DE PAGAMENTO
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="forma_pagamento" id="forma_pagamento">
                      <option value="1">DEBITO</option>
                      <option value="2">CREDITO</option>
                    </select>
                </div>
            </div>
             <div class="col-sm-5">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        CONDIÇÃO DE PAGAMENTO
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="condicao_pagamento" id="condicao_pagamento">
                      <option value="1">A PRAZO</option>
                      <option value="2">A VISTA</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        DATA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('data') is-invalid @enderror" type="date" name="data" id="data" placeholder="">
                        @error('data')
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
        </div>
        <br>
        <div class="row">
            <input name="submit" type="submit" class="btn btn-block btn-primary" value="CADASTRAR">
        </div>
    </form>
@endsection('conteudo')
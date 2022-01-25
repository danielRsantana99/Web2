@extends('layouts.main')

@section('titulo','Criar ItensEntrada)

@section('conteudo')

    <form class="contact_form" action="{{route('itensentrada.store')}}" method="POST">
        @csrf
       <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        PREÇO COMPRA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('precocompra') is-invalid @enderror"  type="text" name="precocompra" id="precocompra"  placeholder="">
                         @error('precocompra')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        QUANTIDADE
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('quantidade') is-invalid @enderror"  type="text" name="quantidade" id="quantidade"  placeholder="">
                         @error('quantidade')
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
        	<div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        IPI
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('ipi') is-invalid @enderror" type="text" name="ipi" id="ipi" placeholder="">
                         @error('ipi')
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
                        FRETE
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('frete') is-invalid @enderror" type="text" name="frete" id="frete" placeholder="">
                         @error('frete')
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
                        UNIDADE
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('unidade') is-invalid @enderror"  type="text" name="unidade" id="unidade" placeholder="">
                         @error('unidade')
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
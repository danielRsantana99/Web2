@extends('layouts.main')

@section('titulo','Editar Produto')

@section('conteudo')
    <form class="contact_form" action="{{route('produto.update', ['id' => $produto->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        MOTOR
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="motor" id="motor">
                      <option value="1"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        CARRO
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="carro" id="carro">
                      <option value="1"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        VALVULAS
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="valvulas" id="valvulas">
                      <option value="1"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        FABRICAÇÃO
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="fabricacao" id="fabricacao">
                      <option value="1"></option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        CATEGORIA
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                      <option value="1"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        MARCA
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="marca" id="marca">
                      <option value="1"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        LOCALIZAÇÃO
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" name="localizacao" id="localizacao">
                      <option value="1"></option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3 mb-3">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        NOME PRODUTO
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
            <div class="col-sm-3 mb-3">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        ICMS
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('icms') is-invalid @enderror"  type="text" name="icms" id="icms" placeholder="">
                         @error('icms')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
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
            <div class="col-sm-3 mb-3">
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
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        PREÇO FABRICA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('precofabrica') is-invalid @enderror"  type="numeric" name="precofabrica" id="precofabrica" placeholder="">
                         @error('precofabrica')
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
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        PREÇO VENDA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('precovenda') is-invalid @enderror"  type="text" name="precovenda" id="precovenda"  placeholder="">
                         @error('precovenda')
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
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        REFERENCIA
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('referencia') is-invalid @enderror"  type="text" name="referencia" id="referencia" placeholder="">
                         @error('referencia')
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
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        LUCRO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('lucro') is-invalid @enderror" type="text" name="lucro" id="lucro" placeholder="">
                         @error('lucro')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        DESCONTO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('desconto') is-invalid @enderror"  type="text" name="desconto" id="desconto"  placeholder="">
                         @error('desconto')
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
                        QUANTIDADE
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('quantidade') is-invalid @enderror" type="text" name="quantidade" id="quantidade"  placeholder="">
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
            <input name="submit" type="submit" class="btn btn-block btn-primary" value="ALTERAR">
        </div>
    </form>
@endsection('conteudo')
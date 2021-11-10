@extends('layouts.main')

@section('titulo','Criar Produto')

@section('conteudo')
    <form class="contact_form" action="{{route('produto.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-3 mb-3">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        NOME PRODUTO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" id="nome"required="" placeholder="">
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
                        <input class="form-control @error('icms') is-invalid @enderror"  type="text" name="icms" id="icms" required="" placeholder="">
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
                        <input class="form-control @error('ipi') is-invalid @enderror" type="text" name="ipi" id="ipi" required="" placeholder="">
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
                        <input class="form-control @error('frete') is-invalid @enderror" type="text" name="frete" id="frete" required="" placeholder="">
                         @error('frete')
                        <div class="invalid-feedaback">
                            {{message}}
                        </div>

                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        PREÇO FABRICA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('precofabrica') is-invalid @enderror"  type="numeric" name="precofabrica" id="precofabrica" required="" placeholder="">
                         @error('precofabrica')
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
                        PREÇO COMPRA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('precocompra') is-invalid @enderror"  type="text" name="precocompra" id="precocompra" required="" placeholder="">
                         @error('precocompra')
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
                        PREÇO VENDA
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('precovenda') is-invalid @enderror"  type="text" name="precovenda" id="precovenda" required="" placeholder="">
                         @error('precovenda')
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
        <div class="row">
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        LUCRO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('lucro') is-invalid @enderror" type="text" name="lucro" id="lucro" required="" placeholder="">
                         @error('lucro')
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
                        DESCONTO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('desconto') is-invalid @enderror"  type="text" name="desconto" id="desconto" required="" placeholder="">
                         @error('desconto')
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
                        QUANTIDADE
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('quantidade') is-invalid @enderror" type="text" name="quantidade" id="quantidade" required="" placeholder="">
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
            <input name="submit" type="submit" class="btn btn-block btn-primary" value="CADASTRAR">
        </div>
    </form>
@endsection('conteudo')
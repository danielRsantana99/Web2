@extends('layouts.main')

@section('titulo','Criar ItensVenda)

@section('conteudo')


    <form class="contact_form" action="{{route('itensvenda.store')}}" method="POST">
        @csrf
       <div class="row">
            <div class="col-sm-6">
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
            <div class="col-sm-6">
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
            <div class="col-sm-6 ">
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
        </div>
        <br>
        <div class="row">
            <input name="submit" type="submit" class="btn btn-block btn-primary" value="CADASTRAR">
        </div>
    </form>
  
@endsection('conteudo')
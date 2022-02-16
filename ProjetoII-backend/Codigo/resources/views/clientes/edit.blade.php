@extends('layouts.main')

@section('titulo','Editar Cliente')

@section('conteudo')
    
    <form class="contact_form" action="{{route('clientes.update', ['id' => $cliente->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-6 mb-6">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        NOME 
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" id="nome" placeholder="" value="{{$cliente->nome}}">
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
                        TELEFONE
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('telefone') is-invalid @enderror" type="numeric" name="telefone" id="telefone" placeholder="" value="{{$cliente->telefone}}">
                        @error('telefone')
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
                        CPF
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('cpf') is-invalid @enderror" type="text" name="cpf" id="cpf" placeholder="" value="{{$cliente->cpf}}">
                        @error('cpf')
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
                       CNPJ 
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('cnpj') is-invalid @enderror" type="text" name="cnpj" id="cnpj" placeholder="" value="{{$cliente->cnpj}}">
                        @error('cnpj')
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
                        DEBITO
                        <span class="text-danger">*</span>
                    </label>

                    <div class="input-group">
                        <input class="form-control @error('debito') is-invalid @enderror" type="text" name="debito" id="debito" placeholder="" value="{{$cliente->debito}}">
                        @error('debito')
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
@extends('layouts.main')

@section('titulo','Editar Carro')

@section('conteudo')
    <form class="contact_form" action="{{route('carro.update', ['id' => $carro->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        POTÊNCIA
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('potencia') is-invalid @enderror" type="text" name="potencia" id="potencia" placeholder="">
                        @error('potencia')
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
@extends('layouts.main')

@section('titulo','Editar Cliente')

@section('conteudo')
    <form class="contact_form" action="{{route('valvula.update', ['id' => $valvula->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        QUANTIDADE
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('quantidade') is-invalid @enderror" type="text" name="quantidade" id="quantidade" placeholder="">
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
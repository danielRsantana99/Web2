@extends('layouts.main')

@section('titulo','Editar Cliente')

@section('conteudo')
    <form class="contact_form" action="{{route('marca.update', ['id' => $marca->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="h6 small d-block text-uppercase">
                        MARCA
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input class="form-control @error('marca') is-invalid @enderror" type="text" name="marca" id="marca" placeholder="">
                        @error('marca')
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
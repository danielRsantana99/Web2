@extends('layouts.main')

@section('titulo','Editar Fornecedor)

@section('conteudo')
    <form action="{{route('fornecedores.update', ['id' => $fornecedores->id])}}" method="post">
        @csrf
        @method('PUT')
    	<<label for="">Nome Fornecedor</label>
        <input type="text" name="nome" id="nome">
        <label for="">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj">
        <label for="">Endereço</label>
        <input type="text" name="endereco" id="endereco">
    	<input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
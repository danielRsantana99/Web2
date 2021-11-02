@extends('layouts.main')

@section('titulo','Criar Produto')

@section('conteudo')
    <form action="{{route('produto.store')}}" method="post">
        @csrf
        <ul>
            <li>
                <label for="">Nome Produto</label>
                <input type="text" name="nome" id="nome">
            </li>
            <li>
                <label for="">Icms</label>
                <input type="text" name="icms" id="icms">
            </li>
            <li>
                <label for="">Ipi</label>
                <input type="text" name="ipi" id="ipi">
            </li>
            <li>
                <label for="">Frete</label>
                <input type="text" name="frete" id="frete">
            </li>
            <li>
                <label for="">Preço Fabrica</label>
                <input type="text" name="precofabrica" id="precofabrica">
            </li>
            <li>
                <label for="">Preço Compra</label>
                <input type="text" name="precocompra" id="precocompra">
            </li>
            <li>
                <label for="">Preço Venda</label>
                <input type="text" name="precovenda" id="precovenda">
            </li>
            <li>
                <label for="">Lucro</label>
                <input type="text" name="lucro" id="lucro">
            </li>
            <li>            
                <label for="">Desconto</label>
                <input type="text" name="desconto" id="desconto">
            </li>
            <li>
                <label for="">Quantidade</label>
                <input type="text" name="quantidade" id="quantidade">
            </li>
        </ul>
    	<input type="submit" value="Cadastrar">
    </form>
@endsection('conteudo')
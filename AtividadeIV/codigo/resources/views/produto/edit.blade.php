<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <form action="../update/{{$produtos->id}}" method="post">
        @csrf
        @method('PUT')
    	<label for="">Nome Produto</label>
        <input type="text" name="nome" id="nome">
        <label for="">Icms</label>
        <input type="text" name="icms" id="icms">
        <label for="">Ipi</label>
        <input type="text" name="ipi" id="ipi">
        <label for="">Frete</label>
        <input type="text" name="frete" id="frete">
        <label for="">Preço Fabrica</label>
        <input type="text" name="precofabrica" id="precofabrica">
        <label for="">Preço Compra</label>
        <input type="text" name="precocompra" id="precocompra">
        <label for="">Preço Venda</label>
        <input type="text" name="precovenda" id="precovenda">
        <label for="">Lucro</label>
        <input type="text" name="lucro" id="lucro">
        <label for="">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
    	<input type="submit" value="Alterar">
    </form>
</body>
</html>
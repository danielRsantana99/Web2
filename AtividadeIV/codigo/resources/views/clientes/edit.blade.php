<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
</head>
<body>
    <form action="../update/{{$cliente->id}}" method="post">
        @csrf
        @method('PUT')
    	<label for="">Nome clientes</label>
    	<input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
		<label for="">Debito</label>
    	<input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
    	<label for="">Descrição</label>
    	<input type="text" name="descricao" id="descricao" value="{{$cliente->descricao}}">
    	<input type="submit" value="Alterar">
    </form>
</body>
</html>
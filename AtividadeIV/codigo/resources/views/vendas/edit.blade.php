<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Editar Vendas</title>
</head>
<body>
    <form action="../update/{{$vendas->id}}" method="post">
        @csrf
        @method('PUT')
    	<label for="">Id Cliente</label>
        <input type="text" name="idcliente" id="idcliente">
        <label for="">valortotal</label>
        <input type="text" name="valortotal" id="valortotal">
    	<input type="submit" value="Alterar">
    </form>
</body>
</html>
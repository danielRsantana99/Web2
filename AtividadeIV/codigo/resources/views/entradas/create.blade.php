<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Cadastrar Entradas</title>
</head>
<body>
    <form action="./store" method="post">
        @csrf
    	<label for="">ID fornecedor</label>
    	<input type="text" name="idfornecedor" id="idfornecedor">
		<label for="">Valor total</label>
    	<input type="numeric" name="valortotal" id="valortotal">
    	<input type="submit" value="Cadastrar">
    </form>
</body>
</html>
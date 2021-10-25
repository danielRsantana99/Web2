<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Editar Entrada</title>
</head>
<body>
    <form action="../update/{{$entradas->id}}" method="post">
        @csrf
        @method('PUT')
    	<label for="">ID fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor">
        <label for="">Valor total</label>
        <input type="numeric" name="valortotal" id="valortotal">
    	<input type="submit" value="Alterar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Cadastrar Fornecedores</title>
</head>
<body>
    <form action="../../../app/Http/Controller/FornecedorController/store" method="post">
    	<label for="">Nome cFornecedor</label>
    	<input type="text" name="nome" id="nome">
		<label for="">CNPJ</label>
    	<input type="text" name="cnpj" id="cnpj">
    	<label for="">Endereço</label>
    	<input type="text" name="endereco" id="endereco">
    	<input type="submit" value="Cadastrar">
    </form>
</body>
</html>
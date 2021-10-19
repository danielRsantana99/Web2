<h1>Pagina de clientes</h1>

@foreach ($Fornecedores as $Fornecedores)
	Nome do fornecedor: $Fornecedores->nome;
	CNPJ do fornecedor: $Fornecedores->cnpj;
	endereço: $Fornecedores->endereco;

@endforeach
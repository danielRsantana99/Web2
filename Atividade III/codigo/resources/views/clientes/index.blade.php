<h1>Pagina de clientes</h1>

@foreach ($clientes as $cliente)
	nome do cliente: $cliente->nome;
	debito do cliente: $cliente->debito;
	descrição: $cliente->descricao;

@endforeach
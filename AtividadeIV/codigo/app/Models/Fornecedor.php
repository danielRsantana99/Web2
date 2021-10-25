<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="fornecedor";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $fillable = [
		'nome',
		'cnpj',
		'endereco'

	];
}




?>
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="produto";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $fillable = [
		'nome',
		'icms',
		'ipi',
		'frete',
		'precofabrica',
		'precocompra',
		'precovenda',
		'lucro',
		'desconto',
		'quantidade'
		

	];
}




?>
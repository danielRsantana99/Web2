<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="venda";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $fillable = [
		'idcliente',
		'valortotal',
		'datavenda'

	];
}




?>
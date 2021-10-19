<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="clientes";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $fillable = [
		'nome',
		'debito',
		'descricao'

	];
}




?>
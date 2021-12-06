<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="venda";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $guarded = [];

	public function cliente(){
        return $this->belongsTo(Cliente::class, 'idcliente','id');
    }

    function Itensvenda(){
        return $this->hasMany(itensvenda::class, 'idvenda', 'id');
    }

   	public function formapagamento(){
        return $this->belongsTo(FormaPagamento::class, 'idformapagamento','id');
    }
}




?>
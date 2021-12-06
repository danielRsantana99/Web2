<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="entrada";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $guarded = [];

	public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'idfornecedor','id');
    }

    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'identrada', 'id');
    }
}




?>
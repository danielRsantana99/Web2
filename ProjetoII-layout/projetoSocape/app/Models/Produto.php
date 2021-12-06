<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="produto";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $guarded = [];


    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'idproduto', 'id');
    }

    function itensvenda(){
        return $this->hasMany(Itensvenda::class, 'idproduto', 'id');
    }


	public function carro(){
        return $this->belongsTo(Carro::class, 'idcarro','id');
    }

	public function motor(){
        return $this->belongsTo(Motor::class, 'idmotor','id');
    }


	public function categoria(){
        return $this->belongsTo(Categoria::class, 'idcategoria','id');
    }

	public function fabricacao(){
        return $this->belongsTo(Fabricacao::class, 'idfabricacao','id');
    }


	public function localizacao(){
        return $this->belongsTo(Localizacao::class, 'idlocalizacao','id');
    }

	public function marca(){
        return $this->belongsTo(Marca::class, 'idmarca','id');
    }

    public function valvula(){
        return $this->belongsTo(Valvula::class, 'idvalvula','id');
    }

}




?>
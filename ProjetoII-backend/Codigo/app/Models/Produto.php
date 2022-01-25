<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
	use HasFactory;

	//NOME DA TABELA
	protected $table="produto";


	//COLOCAR CAMPOS QUE SERÃO SETADOS NO BD
	protected $guarded = [];


    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'id_produto', 'id');
    }

    function itensvenda(){
        return $this->hasMany(Itensvenda::class, 'id_produto', 'id');
    }


	public function carro(){
        return $this->belongsTo(Carro::class, 'id_carro','id');
    }

	public function motor(){
        return $this->belongsTo(Motor::class, 'id_motor','id');
    }


	public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria','id');
    }

	public function fabricacao(){
        return $this->belongsTo(Fabricacao::class, 'id_fabricacao','id');
    }


	public function localizacao(){
        return $this->belongsTo(Localizacao::class, 'id_localizacao','id');
    }

	public function marca(){
        return $this->belongsTo(Marca::class, 'id_marca','id');
    }

    public function valvula(){
        return $this->belongsTo(Valvula::class, 'id_valvula','id');
    }

}




?>
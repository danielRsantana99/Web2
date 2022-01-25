<<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itensentrada extends Model{
	use HasFactory;
	
	protected $table= "itensentrada";


      //permite salvar menos campos no bd
    protected $guarded = [];

    public function entrada(){
    	return $this->belongsTo(Entrada::class, 'id_entrada','id');
    }

      public function produto(){
    	return $this->belongsTo(Produto::class, 'id_produto','id');
    }

}
?>
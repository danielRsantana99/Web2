<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
	use HasFactory;

    //nome da tabela
    protected $table= "localizacao";


      //permite salvar menos campos no bd
    protected $guarded = [];
    
    function produto(){
        return $this->hasMany(Produto::class, 'id_localizacao', 'id');
    }

    }




?>
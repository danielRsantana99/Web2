<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricacao extends Model{
	use HasFactory;

    //nome da tabela
    protected $table= "fabricacao";


      //permite salvar menos campos no bd
    protected $guarded = [];
    
    function produto(){
        return $this->hasMany(Produto::class, 'idfabricacao', 'id');
    }

    }




?>
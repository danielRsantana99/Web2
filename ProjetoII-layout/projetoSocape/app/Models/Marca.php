<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model{
	use HasFactory;

    //nome da tabela
    protected $table= "marca";


      //permite salvar menos campos no bd
    protected $guarded = [];
    
    function produto(){
        return $this->hasMany(Produto::class, 'idmarca', 'id');
    }

    }




?>
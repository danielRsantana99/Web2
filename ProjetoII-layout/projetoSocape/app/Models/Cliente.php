<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
	use HasFactory;

    //nome da tabela
    protected $table= "clientes";


      //permite salvar menos campos no bd
    protected $guarded = [];
    

    function venda(){
        return $this->hasMany(Venda::class, 'idcliente', 'id');
    }
}




?>
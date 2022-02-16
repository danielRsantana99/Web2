<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model{
	use HasFactory;

    //nome da tabela
    protected $table= "formapagamento";


      //permite salvar menos campos no bd
    protected $guarded = [];
    
    function venda(){
        return $this->hasMany(FormaPagamento::class, 'id_formapagamento', 'id');
    }

    }




?>
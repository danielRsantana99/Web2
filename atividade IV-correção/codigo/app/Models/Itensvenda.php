<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itensvenda extends Model{
	use HasFactory;

	protected $table= "itensvenda";


      //permite salvar menos campos no bd
     protected $guarded = [];

    public function venda(){
    	return $this->belongsTo(Venda::class, 'idvenda','id');
    }

}

?>


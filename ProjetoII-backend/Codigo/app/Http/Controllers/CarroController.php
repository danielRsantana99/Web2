<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
	// 
	public function index(){
		$Carro = carro::all();
		
		return view('carro.index',['carro' =>$Carro);
	}

	public function create(){
		
     
		return view('carro.create');
	}


	public function store(Request $resquest){
		$resquest->validate([
		'modelo'=>'required',
		]);
		
		$Carro = new carro();
		$Carro->modelo = $resquest->modelo;
		$Carro->save();
		
	}


	public function update(Request $resquest){
		
		$resquest->validate([
		'modelo'=>'required'
		]);
		Carro::find($resquest->id)->update($resquest->except('_method'));
		
		return redirect('carro/index')->with('msg','Cadastro realizado com sucesso');
	}	
	
	public function show($id){
		
		if($id){
			$Carro = carro::where('id',$id)->get();
		}else{
			$Carro = carro::all();
		}
		return view('carro.show',['carro'=>$Carro]);
	}

	public function edit($id){
		
		$Carro = carro::find($id);
		return view('carro.edit',['carro'=>$Carro]);
	}


	public function destroy($id){
		carro::findOrFail($id)->delete();
	
		return redirect('carro/index')->with('msg','apagado com sucesso');

	}
}

